<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/anthropic.php';
require_once __DIR__ . '/../includes/backgrounds.php';
require_once __DIR__ . '/../includes/levels.php';

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

$topic = trim((string)($input['topic'] ?? ''));
$level = (string)($input['level'] ?? '');

if ($topic === '' || mb_strlen($topic) > 150) {
    http_response_code(400);
    echo json_encode(['error' => 'Please provide a topic (1-150 characters).']);
    exit;
}
if (!array_key_exists($level, LEVELS)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid level.']);
    exit;
}

$levelGuidance = [
    'beginner' => 'Use only the most common, simple everyday words (A1 CEFR). Keep sentences very short and use present simple tense. Discussion questions should be answerable in one short sentence.',
    'elementary' => 'Use common everyday vocabulary (A2 CEFR). Simple sentence structures, mostly present and past simple. Discussion questions can require 2-3 sentence answers.',
    'pre-intermediate' => 'Use broader everyday and some abstract vocabulary (B1 CEFR). Questions can involve opinions, comparisons and simple explanations.',
    'intermediate' => 'Use richer, more nuanced vocabulary including some idiomatic expressions (B1+/B2 CEFR). Questions should invite debate, opinions and hypothetical reasoning.',
];

$system = <<<SYS
You are a curriculum designer for an English speaking club serving Russian- and Kazakh-speaking learners.
Given a topic and a CEFR level, you produce one complete lesson.
You MUST respond with ONLY a single valid JSON object, no markdown fences, no commentary, matching exactly this shape:

{
  "vocab": [ { "en": "...", "ru": "...", "kz": "..." }, ... 12 to 15 items ],
  "warmup": { "en": "...", "ru": "...", "kz": "..." },
  "questions": [ { "en": "...", "ru": "...", "kz": "..." }, ... 8 to 10 items ]
}

Rules:
- "vocab": key words a learner needs for this topic, useful in daily conversation, no duplicates.
- "warmup": one short paragraph (2-3 sentences) introducing the topic and inviting the learner to start talking about it, translated into Russian and Kazakh.
- "questions": open discussion questions building on the vocab and warmup, ordered from easier to more thought-provoking, each translated into Russian and Kazakh.
- All Russian and Kazakh text must be natural, correct, and idiomatic — not machine-literal.
- Output raw JSON only.
SYS;

$user = "Topic: \"$topic\"\nLevel: $level\nLevel guidance: {$levelGuidance[$level]}";

try {
    $result = anthropic_generate_json($system, $user);
} catch (AnthropicError $e) {
    http_response_code(502);
    echo json_encode(['error' => $e->getMessage()]);
    exit;
}

if (!isset($result['vocab'], $result['warmup'], $result['questions'])
    || !is_array($result['vocab']) || !is_array($result['questions']) || !is_array($result['warmup'])) {
    http_response_code(502);
    echo json_encode(['error' => 'AI response was missing expected fields. Please try again.']);
    exit;
}

echo json_encode([
    'topic' => $topic,
    'level' => $level,
    'vocab' => $result['vocab'],
    'warmup' => $result['warmup'],
    'questions' => $result['questions'],
    'background_key' => mood_for_topic($topic),
]);
