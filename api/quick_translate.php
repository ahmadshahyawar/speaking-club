<?php
declare(strict_types=1);
// Intentionally not login-gated, same trust model as present.php - this is
// called from the lesson display page during a live class.
require_once __DIR__ . '/../includes/quicktranslate.php';

header('Content-Type: application/json');

$word = trim((string)($_GET['word'] ?? ''));
if ($word === '' || mb_strlen($word) > 40) {
    http_response_code(400);
    echo json_encode(['error' => 'Please provide a single word (up to 40 characters).']);
    exit;
}

try {
    echo json_encode(quick_translate($word), JSON_UNESCAPED_UNICODE);
} catch (QuickTranslateError $e) {
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}
