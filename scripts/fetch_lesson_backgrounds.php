<?php
declare(strict_types=1);
// Fetches one landscape background photo per lesson (keyed by topic) into
// assets/lesson_backgrounds/{lesson_id}.jpg, tracked in lesson_backgrounds.
// Uses Pexels "large" size (940x650, ~130KB) - plenty for a blurred/dimmed
// full-screen backdrop, without the 4x file size of large2x.

$options = getopt('', ['key:', 'shard:']);
if (!isset($options['key'], $options['shard']) || !preg_match('/^(\d+)\/(\d+)$/', $options['shard'], $m)) {
    fwrite(STDERR, "Usage: php fetch_lesson_backgrounds.php --key=PEXELS_KEY --shard=INDEX/TOTAL\n");
    exit(1);
}
$apiKey = $options['key'];
$shardIndex = (int)$m[1];
$shardTotal = (int)$m[2];

$cfg = require '/home/u856637812/config/speaking_club_config.php';
$pdo = new PDO("mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4", $cfg['db_user'], $cfg['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$webRoot = '/home/u856637812/domains/omarshoaibyawar.com/public_html/speakingclub';
$imageDir = $webRoot . '/assets/lesson_backgrounds';
if (!is_dir($imageDir)) {
    mkdir($imageDir, 0755, true);
}

$cached = [];
foreach ($pdo->query("SELECT lesson_id FROM lesson_backgrounds") as $row) {
    $cached[(int)$row['lesson_id']] = true;
}

$lessons = $pdo->query("SELECT id, topic FROM lessons ORDER BY id")->fetchAll();
$todo = [];
foreach ($lessons as $row) {
    $id = (int)$row['id'];
    if (isset($cached[$id])) continue;
    if (($id % $shardTotal) !== $shardIndex) continue;
    $todo[$id] = $row['topic'];
}

$total = count($todo);
fwrite(STDOUT, "[shard $shardIndex/$shardTotal] Total lessons: " . count($lessons) . ", already cached: " . count($cached) . ", this shard to fetch: $total\n");
flush();

$insert = $pdo->prepare("INSERT INTO lesson_backgrounds (lesson_id, image_path, credit_name, credit_url) VALUES (?, ?, ?, ?) ON DUPLICATE KEY UPDATE image_path = VALUES(image_path)");

$done = 0;
$failed = 0;
foreach ($todo as $lessonId => $topic) {
    $done++;
    $filename = $lessonId . '.jpg';
    $filepath = $imageDir . '/' . $filename;
    $relPath = 'assets/lesson_backgrounds/' . $filename;

    $query = urlencode($topic);
    $url = "https://api.pexels.com/v1/search?query={$query}&per_page=1&orientation=landscape";

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
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] FAILED search for lesson $lessonId '$topic' (HTTP $httpCode)\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    $data = json_decode($resp, true);
    $photo = $data['photos'][0] ?? null;
    if (!$photo) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] No photo found for lesson $lessonId '$topic'\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    $imageUrl = $photo['src']['large'] ?? $photo['src']['medium'] ?? null;
    $photographer = $photo['photographer'] ?? null;
    $photographerUrl = $photo['photographer_url'] ?? null;

    if (!$imageUrl) {
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] No image URL for lesson $lessonId '$topic'\n");
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
        fwrite(STDOUT, "[shard $shardIndex][$done/$total] FAILED download for lesson $lessonId '$topic'\n");
        flush();
        $failed++;
        usleep(300000);
        continue;
    }

    file_put_contents($filepath, $imgData);
    $insert->execute([$lessonId, $relPath, $photographer, $photographerUrl]);

    fwrite(STDOUT, "[shard $shardIndex][$done/$total] OK: lesson $lessonId '$topic' -> $relPath\n");
    flush();

    sleep(19);
}

fwrite(STDOUT, "[shard $shardIndex] Done. Fetched: " . ($done - $failed) . ", Failed: $failed\n");
