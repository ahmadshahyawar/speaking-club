<?php
declare(strict_types=1);
// Intentionally not login-gated: called from present.php/game.php, which
// are themselves unlisted-link classroom display pages (see their own
// comments). Same trust model applies here.
require_once __DIR__ . '/../includes/tts.php';

$text = trim((string)($_GET['text'] ?? ''));
if ($text === '' || mb_strlen($text) > 200) {
    http_response_code(400);
    exit;
}

try {
    $path = tts_cached_audio_path($text);
} catch (TtsError $e) {
    http_response_code(502);
    header('Content-Type: text/plain');
    echo $e->getMessage();
    exit;
}

header('Content-Type: audio/mpeg');
header('Cache-Control: public, max-age=2592000, immutable');
header('Content-Length: ' . (string)filesize($path));
readfile($path);
