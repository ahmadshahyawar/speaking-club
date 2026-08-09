<?php
declare(strict_types=1);

$options = getopt('', ['key:', 'shard:']);
if (!isset($options['key'], $options['shard']) || !preg_match('/^(\d+)\/(\d+)$/', $options['shard'], $m)) {
    fwrite(STDERR, "Usage: php fetch_vocab_images_multi.php --key=PEXELS_KEY --shard=INDEX/TOTAL\n");
    exit(1);
}
$apiKey = $options['key'];
$shardIndex = (int)$m[1];
$shardTotal = (int)$m[2];

$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$webRoot = '/home/u856637812/domains/omarshoaibyawar.com/public_html';
$imageDir = $webRoot . '/assets/vocab_images';
if (!is_dir($imageDir)) {
    mkdir($imageDir, 0755, true);
}

function slugify(string $word): string {
    $slug = mb_strtolower(trim($word));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-') ?: 'word';
}

// Collect unique EN vocab words from beginner + elementary lessons, preserving first-seen original casing.
$stmt = $pdo->query("SELECT vocab FROM lessons WHERE level IN ('beginner','elementary')");
$words = [];
foreach ($stmt as $row) {
    $vocab = json_decode($row['vocab'], true);
    if (!is_array($vocab)) continue;
    foreach ($vocab as $v) {
        if (!isset($v['en'])) continue;
        $original = trim($v['en']);
        $key = mb_strtolower($original);
        if ($key === '') continue;
        if (!isset($words[$key])) {
            $words[$key] = $original;
        }
    }
}

// Skip words already cached.
$cached = [];
foreach ($pdo->query("SELECT word FROM vocab_images") as $row) {
    $cached[$row['word']] = true;
}

// Deterministic shard assignment so concurrent workers never duplicate work.
$todo = [];
foreach ($words as $key => $original) {
    if (isset($cached[$key])) continue;
    if ((crc32($key) % $shardTotal) !== $shardIndex) continue;
    $todo[$key] = $original;
}

$total = count($todo);
fwrite(STDOUT, "[shard $shardIndex/$shardTotal] Total unique words: " . count($words) . ", already cached: " . count($cached) . ", this shard to fetch: $total\n");
flush();

$insert = $pdo->prepare("INSERT INTO vocab_images (word, image_path, credit_name, credit_url) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE image_path = VALUES(image_path)");

$done = 0;
$failed = 0;
foreach ($todo as $key => $original) {
    $done++;
    $slug = slugify($key);
    $filename = $slug . '.jpg';
    $filepath = $imageDir . '/' . $filename;
    $relPath = 'assets/vocab_images/' . $filename;

    $query = urlencode($original);
    $url = "https://api.pexels.com/v1/search?query={$query}&per_page=1&orientation=square";

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => ["Authorization: {$apiKey}"],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,
    ]);
    $resp = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 429) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] Rate limited (429). Sleeping 65 minutes...\n");
        flush();
        sleep(65 * 60);
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_HTTPHEADER => ["Authorization: {$apiKey}"],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
        ]);
        $resp = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    }

    if ($httpCode !== 200 || !$resp) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] FAILED search for '$original' (HTTP $httpCode)\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    $data = json_decode($resp, true);
    $photo = $data['photos'][0] ?? null;
    if (!$photo) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] No photo found for '$original'\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    $imageUrl = $photo['src']['medium'] ?? $photo['src']['small'] ?? null;
    $photographer = $photo['photographer'] ?? null;
    $photographerUrl = $photo['photographer_url'] ?? null;

    if (!$imageUrl) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] No image URL for '$original'\n");
        flush();
        $failed++;
        continue;
    }

    $imgCh = curl_init($imageUrl);
    curl_setopt_array($imgCh, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,
    ]);
    $imgData = curl_exec($imgCh);
    $imgHttpCode = curl_getinfo($imgCh, CURLINFO_HTTP_CODE);
    curl_close($imgCh);

    if ($imgHttpCode !== 200 || !$imgData) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] FAILED download for '$original'\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    file_put_contents($filepath, $imgData);
    $insert->execute([$key, $relPath, $photographer, $photographerUrl]);

    fwrite(STDOUT, "[shard $shardIndex][$done/$total] OK: $original -> $relPath\n");
    flush();

    // Pace requests: free tier is 200/hour = one every 18s; use 19s to stay safely under.
    sleep(19);
}

fwrite(STDOUT, "[shard $shardIndex] Done. Fetched: " . ($done - $failed) . ", Failed: $failed\n");
