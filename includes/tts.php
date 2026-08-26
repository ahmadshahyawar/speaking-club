<?php
declare(strict_types=1);

class TtsError extends Exception {}

const TTS_LANG = 'en-GB';

/**
 * Returns the on-disk path to an MP3 for the given text, generating and
 * caching it via Google Translate's text-to-speech endpoint on first
 * request. This is the same unofficial, keyless endpoint the popular gTTS
 * library uses - no account or billing setup needed, but it's not an
 * official API, so treat it as best-effort. Throws TtsError on failure.
 */
function tts_cached_audio_path(string $text): string {
    $cacheDir = __DIR__ . '/../storage/tts_cache';
    if (!is_dir($cacheDir) && !mkdir($cacheDir, 0755, true) && !is_dir($cacheDir)) {
        throw new TtsError('Could not create TTS cache directory.');
    }
    $cacheFile = $cacheDir . '/' . hash('sha256', TTS_LANG . '|' . $text) . '.mp3';
    if (is_file($cacheFile)) {
        return $cacheFile;
    }

    $url = 'https://translate.google.com/translate_tts?ie=UTF-8&client=tw-ob&tl=' . urlencode(TTS_LANG) . '&q=' . urlencode($text);
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0 Safari/537.36',
        CURLOPT_TIMEOUT => 15,
    ]);
    $body = curl_exec($ch);
    $err = curl_error($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($body === false || $status !== 200 || $body === '') {
        throw new TtsError("TTS request failed (HTTP $status): " . ($err ?: 'empty response'));
    }

    file_put_contents($cacheFile, $body);
    return $cacheFile;
}
