<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/auth.php';

$teacher = require_login();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}
require_csrf();

$id = (int)($_POST['id'] ?? 0);
$stmt = db()->prepare('SELECT * FROM lessons WHERE id = ? AND teacher_id = ?');
$stmt->execute([$id, $teacher['id']]);
$lesson = $stmt->fetch();

$level = 'beginner';
if ($lesson) {
    $level = $lesson['level'];
    $newTopic = $lesson['topic'] . ' (Copy)';
    $stmt = db()->prepare('INSERT INTO lessons (teacher_id, level, topic, vocab, warmup, questions, background_key) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$teacher['id'], $lesson['level'], $newTopic, $lesson['vocab'], $lesson['warmup'], $lesson['questions'], $lesson['background_key']]);
}

header('Location: ../dashboard.php?level=' . urlencode($level));
exit;
