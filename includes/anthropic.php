<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

class AnthropicError extends Exception {}

/**
 * Calls the Anthropic Messages API and returns the parsed JSON object the
 * model was instructed to produce. Throws AnthropicError on any failure.
 */
function anthropic_generate_json(string $systemPrompt, string $userPrompt): array {
    $cfg = speaking_club_config();
    $apiKey = $cfg['anthropic_api_key'] ?? '';
    if ($apiKey === '' || $apiKey === 'CHANGE_ME') {
        throw new AnthropicError('Anthropic API key is not configured yet.');
    }

    $payload = [
        'model' => $cfg['anthropic_model'] ?? 'claude-sonnet-4-5',
        'max_tokens' => 4096,
        'system' => $systemPrompt,
        'messages' => [
            ['role' => 'user', 'content' => $userPrompt],
        ],
    ];

    $ch = curl_init('https://api.anthropic.com/v1/messages');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'x-api-key: ' . $apiKey,
            'anthropic-version: 2023-06-01',
        ],
        CURLOPT_TIMEOUT => 90,
    ]);
    $body = curl_exec($ch);
    $err = curl_error($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($body === false) {
        throw new AnthropicError('Request to Anthropic API failed: ' . $err);
    }
    $decoded = json_decode($body, true);
    if ($status !== 200 || !is_array($decoded)) {
        $msg = $decoded['error']['message'] ?? $body;
        throw new AnthropicError("Anthropic API error (HTTP $status): $msg");
    }

    $text = $decoded['content'][0]['text'] ?? '';
    if ($text === '') {
        throw new AnthropicError('Anthropic API returned an empty response.');
    }

    // Strip markdown code fences if the model wrapped the JSON in them.
    $text = trim($text);
    $text = preg_replace('/^```(?:json)?\s*/i', '', $text);
    $text = preg_replace('/\s*```$/', '', $text);

    $json = json_decode($text, true);
    if (!is_array($json)) {
        throw new AnthropicError('Could not parse JSON from the AI response.');
    }
    return $json;
}
