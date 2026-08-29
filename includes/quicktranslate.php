<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

class QuickTranslateError extends Exception {}

/**
 * Translates a single English word to Russian and Kazakh. Checks this
 * project's own lesson vocabulary first (human-reviewed, so it wins when
 * available), then falls back to the free MyMemory translation API for
 * anything not already in the app's vocabulary.
 */
function quick_translate(string $word): array {
    $word = trim($word);
    if ($word === '') {
        throw new QuickTranslateError('Empty word.');
    }
    $key = mb_strtolower($word);

    $stmt = db()->query("SELECT vocab FROM lessons");
    foreach ($stmt as $row) {
        $vocab = json_decode($row['vocab'], true);
        if (!is_array($vocab)) continue;
        foreach ($vocab as $v) {
            if (!isset($v['en'])) continue;
            if (mb_strtolower(trim($v['en'])) === $key) {
                return ['en' => trim($v['en']), 'ru' => $v['ru'] ?? '', 'kz' => $v['kz'] ?? '', 'source' => 'lesson'];
            }
        }
    }

    $ru = mymemory_translate($word, 'ru');
    $kz = mymemory_translate($word, 'kk');
    return ['en' => $word, 'ru' => $ru, 'kz' => $kz, 'source' => 'auto'];
}

function mymemory_translate(string $word, string $targetLang): string {
    $url = 'https://api.mymemory.translated.net/get?q=' . urlencode($word) . '&langpair=en|' . $targetLang;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ]);
    $body = curl_exec($ch);
    curl_close($ch);
    if ($body === false) return '';
    $data = json_decode($body, true);

    // The top-level translatedText picks whichever match has the highest
    // "match" score, which is sometimes a corrupted crowd-sourced entry
    // with quality=0 (e.g. "notebook" -> "НоутбукStencils"). Prefer an
    // actual neural machine-translation match when one exists instead.
    foreach ($data['matches'] ?? [] as $match) {
        if (($match['created-by'] ?? '') === 'MT!' && !empty($match['translation'])) {
            return html_entity_decode((string)$match['translation'], ENT_QUOTES, 'UTF-8');
        }
    }

    $text = $data['responseData']['translatedText'] ?? '';
    return html_entity_decode((string)$text, ENT_QUOTES, 'UTF-8');
}
