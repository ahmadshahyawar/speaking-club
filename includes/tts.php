<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

class TtsError extends Exception {}

const TTS_VOICE = 'en-GB-Neural2-A';

/**
 * Returns the on-disk path to an MP3 for the given text, generating and
 * caching it via Google Cloud Text-to-Speech on first request. Throws
 * TtsError on failure.
 */
function tts_cached_audio_path(string $text): string {
    $cfg = speaking_club_config();
    $apiKey = $cfg['google_tts_api_key'] ?? '';
    if ($apiKey === '' || $apiKey === 'CHANGE_ME') {
        throw new TtsError('Google TTS API key is not configured yet.');
    }

    $cacheDir = __DIR__ . '/../storage/tts_cache';
    if (!is_dir($cacheDir) && !mkdir($cacheDir, 0755, true) && !is_dir($cacheDir)) {
        throw new TtsError('Could not create TTS cache directory.');
    }
    $cacheFile = $cacheDir . '/' . hash('sha256', TTS_VOICE . '|' . $text) . '.mp3';
    if (is_file($cacheFile)) {
        return $cacheFile;
    }

    $payload = [
        'input' => ['text' => $text],
        'voice' => ['languageCode' => 'en-GB', 'name' => TTS_VOICE],
        'audioConfig' => ['audioEncoding' => 'MP3', 'speakingRate' => 0.9],
    ];

    $ch = curl_init('https://texttospeech.googleapis.com/v1/text:synthesize?key=' . urlencode($apiKey));
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_TIMEOUT => 20,
    ]);
    $body = curl_exec($ch);
    $err = curl_error($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($body === false) {
        throw new TtsError('Request to Google TTS failed: ' . $err);
    }
    $decoded = json_decode($body, true);
    if ($status !== 200 || !is_array($decoded)) {
        $msg = $decoded['error']['message'] ?? $body;
        throw new TtsError("Google TTS error (HTTP $status): $msg");
    }
    $audioB64 = $decoded['audioContent'] ?? '';
    if ($audioB64 === '') {
        throw new TtsError('Google TTS returned no audio.');
    }

    file_put_contents($cacheFile, base64_decode($audioB64));
    return $cacheFile;
}
