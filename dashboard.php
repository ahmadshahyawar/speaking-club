<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/levels.php';

$teacher = require_login();
$levels = LEVELS;

$level = $_GET['level'] ?? 'beginner';
if (!array_key_exists($level, $levels)) {
    $level = 'beginner';
}

$stmt = db()->prepare('SELECT id, topic, background_key, created_at FROM lessons WHERE teacher_id = ? AND level = ? ORDER BY created_at DESC');
$stmt->execute([$teacher['id'], $level]);
$lessons = $stmt->fetchAll();

$deleted = isset($_GET['deleted']);
$saved = isset($_GET['saved']);
$active = 'level:' . $level;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= h($levels[$level]) ?> Lessons - Speaking Club Portal</title>
<link rel="stylesheet" href="<?= av('assets/css/style.css') ?>">
</head>
<body>
<div class="app-shell">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="main">
        <div class="main-header">
            <div>
                <h1><?= h($levels[$level]) ?> Lessons</h1>
                <p><?= count($lessons) ?> lesson<?= count($lessons) === 1 ? '' : 's' ?> in this level</p>
            </div>
            <a class="btn" href="lesson_new.php?level=<?= urlencode($level) ?>">+ New Lesson</a>
        </div>

        <?php if ($saved): ?><div class="success-msg">Lesson saved.</div><?php endif; ?>
        <?php if ($deleted): ?><div class="success-msg">Lesson deleted.</div><?php endif; ?>

        <?php if (!$lessons): ?>
            <div class="empty-state">
                <p>No <?= h($levels[$level]) ?> lessons yet.</p>
                <a class="btn" href="lesson_new.php?level=<?= urlencode($level) ?>">Create your first lesson</a>
            </div>
        <?php else: ?>
            <div class="lesson-grid">
                <?php foreach ($lessons as $l): ?>
                    <div class="lesson-card">
                        <div class="cover" style="background: var(--level-<?= h($level) ?>)"></div>
                        <div class="body">
                            <div class="topic"><?= h($l['topic']) ?></div>
                            <div class="meta"><?= h(date('M j, Y', strtotime($l['created_at']))) ?></div>
                            <div class="actions">
                                <a class="btn btn-info btn-sm" href="present.php?id=<?= (int)$l['id'] ?>" target="_blank">▶ Present</a>
                                <a class="btn btn-outline btn-sm" href="lesson_new.php?id=<?= (int)$l['id'] ?>">✎ Edit</a>
                                <form method="post" action="api/duplicate_lesson.php" style="display:inline;">
                                    <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                                    <input type="hidden" name="id" value="<?= (int)$l['id'] ?>">
                                    <button type="submit" class="btn btn-outline btn-sm">⧉ Duplicate</button>
                                </form>
                                <form method="post" action="api/delete_lesson.php" style="display:inline;" onsubmit="return confirm('Delete this lesson?');">
                                    <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                                    <input type="hidden" name="id" value="<?= (int)$l['id'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">🗑</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</div>
</body>
</html>
