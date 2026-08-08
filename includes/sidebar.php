<?php
declare(strict_types=1);
// Expects $teacher (array) and $active (string) in scope.
// $active is one of: 'level:<key>', 'admin', 'password'
require_once __DIR__ . '/levels.php';

$activeLevel = str_starts_with($active, 'level:') ? substr($active, 6) : null;
$initial = mb_strtoupper(mb_substr($teacher['display_name'], 0, 1));
?>
<aside class="sidebar">
    <div class="sidebar-brand">
        <div class="logo-dot">🎙️</div>
        <div class="brand-text">Speaking Club<span>Teacher Portal</span></div>
    </div>

    <div class="sidebar-section">
        <div class="sidebar-label">Lesson Levels</div>
        <?php foreach (LEVELS as $key => $label): ?>
            <a class="sidebar-link <?= $activeLevel === $key ? 'active' : '' ?>" href="dashboard.php?level=<?= urlencode($key) ?>">
                <span class="dot" style="background: var(--level-<?= h($key) ?>)"></span><?= h($label) ?>
            </a>
        <?php endforeach; ?>
    </div>

    <a class="sidebar-cta" href="lesson_new.php?level=<?= urlencode($activeLevel ?? 'beginner') ?>">+ New Lesson</a>

    <div class="sidebar-section">
        <div class="sidebar-label">Account</div>
        <?php if (!empty($teacher['is_admin'])): ?>
            <a class="sidebar-link <?= $active === 'admin' ? 'active' : '' ?>" href="admin.php">👤 Manage Teachers</a>
        <?php endif; ?>
        <a class="sidebar-link <?= $active === 'password' ? 'active' : '' ?>" href="change_password.php">🔒 Change Password</a>
    </div>

    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="sidebar-avatar"><?= h($initial) ?></div>
            <div>
                <div class="sidebar-user-name"><?= h($teacher['display_name']) ?></div>
                <div class="sidebar-user-role"><?= !empty($teacher['is_admin']) ? 'Administrator' : 'Teacher' ?></div>
            </div>
        </div>
        <a class="sidebar-link" href="logout.php">↩ Log out</a>
    </div>
</aside>
