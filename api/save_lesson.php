<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/levels.php';
require_once __DIR__ . '/../includes/backgrounds.php';

header('Content-Type: application/json');

$teacher = current_teacher();
if (!$teacher) {
    http_response_code(401);
    echo json_encode(['error' => 'Not logged in.']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: [];

if (!hash_equals($_SESSION['csrf_token'] ?? '', (string)($input['csrf_token'] ?? ''))) {
    http_response_code(403);
    echo json_encode(['error' => 'Invalid CSRF token.']);
    exit;
}

$id = isset($input['id']) && $input['id'] !== null ? (int)$input['id'] : null;
$topic = trim((string)($input['topic'] ?? ''));
$level = (string)($input['level'] ?? '');
$vocab = $input['vocab'] ?? [];
$warmup = $input['warmup'] ?? [];
$questions = $input['questions'] ?? [];
$backgroundKey = (string)($input['background_key'] ?? 'calm');

if ($topic === '' || mb_strlen($topic) > 150) {
    http_response_code(400);
    echo json_encode(['error' => 'Topic is required (max 150 characters).']);
    exit;
}
if (!array_key_exists($level, LEVELS)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid level.']);
    exit;
}
if (!array_key_exists($backgroundKey, BACKGROUND_MOODS)) {
    $backgroundKey = 'calm';
}
if (!is_array($vocab) || !count($vocab)) {
    http_response_code(400);
    echo json_encode(['error' => 'At least one vocabulary word is required.']);
    exit;
}
if (!is_array($questions) || !count($questions)) {
    http_response_code(400);
    echo json_encode(['error' => 'At least one discussion question is required.']);
    exit;
}
if (!is_array($warmup)) {
    $warmup = ['en' => '', 'ru' => '', 'kz' => ''];
}

function clean_triples(array $items): array {
    $out = [];
    foreach ($items as $item) {
        if (!is_array($item)) continue;
        $en = trim((string)($item['en'] ?? ''));
        $ru = trim((string)($item['ru'] ?? ''));
        $kz = trim((string)($item['kz'] ?? ''));
        if ($en === '' && $ru === '' && $kz === '') continue;
        $out[] = ['en' => $en, 'ru' => $ru, 'kz' => $kz];
    }
    return $out;
}

$vocab = clean_triples($vocab);
$questions = clean_triples($questions);
$warmup = [
    'en' => trim((string)($warmup['en'] ?? '')),
    'ru' => trim((string)($warmup['ru'] ?? '')),
    'kz' => trim((string)($warmup['kz'] ?? '')),
];

if (!$vocab) {
    http_response_code(400);
    echo json_encode(['error' => 'At least one non-empty vocabulary word is required.']);
    exit;
}
if (!$questions) {
    http_response_code(400);
    echo json_encode(['error' => 'At least one non-empty discussion question is required.']);
    exit;
}

$vocabJson = json_encode($vocab, JSON_UNESCAPED_UNICODE);
$warmupJson = json_encode($warmup, JSON_UNESCAPED_UNICODE);
$questionsJson = json_encode($questions, JSON_UNESCAPED_UNICODE);

if ($id) {
    $stmt = db()->prepare('SELECT id FROM lessons WHERE id = ? AND teacher_id = ?');
    $stmt->execute([$id, $teacher['id']]);
    if (!$stmt->fetch()) {
        http_response_code(404);
        echo json_encode(['error' => 'Lesson not found.']);
        exit;
    }
    $stmt = db()->prepare('UPDATE lessons SET level = ?, topic = ?, vocab = ?, warmup = ?, questions = ?, background_key = ? WHERE id = ? AND teacher_id = ?');
    $stmt->execute([$level, $topic, $vocabJson, $warmupJson, $questionsJson, $backgroundKey, $id, $teacher['id']]);
} else {
    $stmt = db()->prepare('INSERT INTO lessons (teacher_id, level, topic, vocab, warmup, questions, background_key) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$teacher['id'], $level, $topic, $vocabJson, $warmupJson, $questionsJson, $backgroundKey]);
    $id = (int)db()->lastInsertId();
}

echo json_encode(['id' => $id]);
