<?php
declare(strict_types=1);
// One-off: fetches photos for any Who Am I? profession word that doesn't
// already have one in vocab_images. Single-threaded (the word count here is
// small), reuses the same Pexels search + 19s pacing as the multi-key script.

$options = getopt('', ['key:', 'shard:']);
if (!isset($options['key'])) {
    fwrite(STDERR, "Usage: php fetch_whoami_images.php --key=PEXELS_KEY [--shard=INDEX/TOTAL]\n");
    exit(1);
}
$apiKey = $options['key'];
$shardIndex = 0;
$shardTotal = 1;
if (isset($options['shard']) && preg_match('/^(\d+)\/(\d+)$/', $options['shard'], $m)) {
    $shardIndex = (int)$m[1];
    $shardTotal = (int)$m[2];
}

$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$webRoot = '/home/u856637812/domains/omarshoaibyawar.com/public_html/speakingclub';
$imageDir = $webRoot . '/assets/vocab_images';
require_once $webRoot . '/includes/whoami.php';

function slugify(string $word): string {
    $slug = mb_strtolower(trim($word));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-') ?: 'word';
}

$words = [];
foreach (['beginner', 'elementary', 'pre-intermediate', 'intermediate'] as $lvl) {
    foreach (build_whoami_bank($lvl) as $entry) {
        $key = mb_strtolower(trim($entry['word']));
        $words[$key] = $entry['word'];
    }
}

$cached = [];
foreach ($pdo->query("SELECT word FROM vocab_images") as $row) {
    $cached[$row['word']] = true;
}

$allMissing = array_filter(array_keys($words), fn($k) => !isset($cached[$k]));
$todo = [];
foreach ($words as $key => $original) {
    if (isset($cached[$key])) continue;
    if ((crc32($key) % $shardTotal) !== $shardIndex) continue;
    $todo[$key] = $original;
}

$total = count($todo);
fwrite(STDOUT, "[shard $shardIndex/$shardTotal] Total Who Am I words: " . count($words) . ", missing overall: " . count($allMissing) . ", this shard to fetch: $total\n");
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

    // "profession" biases Pexels toward a person doing the job, not a random
    // unrelated object that happens to share the word.
    $query = urlencode($original . ' profession');
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
        fwrite(STDOUT, "[$done/$total] Rate limited (429). Sleeping 65 minutes...\n");
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
        fwrite(STDOUT, "[$done/$total] FAILED search for '$original' (HTTP $httpCode)\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    $data = json_decode($resp, true);
    $photo = $data['photos'][0] ?? null;
    if (!$photo) {
        fwrite(STDOUT, "[$done/$total] No photo found for '$original'\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    $imageUrl = $photo['src']['medium'] ?? $photo['src']['small'] ?? null;
    $photographer = $photo['photographer'] ?? null;
    $photographerUrl = $photo['photographer_url'] ?? null;

    if (!$imageUrl) {
        fwrite(STDOUT, "[$done/$total] No image URL for '$original'\n");
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
        fwrite(STDOUT, "[$done/$total] FAILED download for '$original'\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    file_put_contents($filepath, $imgData);
    $insert->execute([$key, $relPath, $photographer, $photographerUrl]);

    fwrite(STDOUT, "[$done/$total] OK: $original -> $relPath\n");
    flush();

    sleep(19);
}

fwrite(STDOUT, "Done. Fetched: " . ($done - $failed) . ", Failed: $failed\n");
