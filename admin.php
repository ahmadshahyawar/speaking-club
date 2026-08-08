<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/auth.php';

$admin = require_admin();
$teacher = $admin;

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf();
    $action = (string)($_POST['action'] ?? '');

    if ($action === 'create') {
        $display_name = trim((string)($_POST['display_name'] ?? ''));
        $username = trim((string)($_POST['username'] ?? ''));
        $password = (string)($_POST['password'] ?? '');

        if ($display_name === '' || $username === '' || $password === '') {
            $error = 'Please fill in every field.';
        } elseif (!preg_match('/^[a-zA-Z0-9_.-]{3,50}$/', $username)) {
            $error = 'Username must be 3-50 characters: letters, numbers, dot, dash, underscore.';
        } elseif (strlen($password) < 8) {
            $error = 'Password must be at least 8 characters.';
        } else {
            $stmt = db()->prepare('SELECT id FROM teachers WHERE username = ?');
            $stmt->execute([$username]);
            if ($stmt->fetch()) {
                $error = 'That username is already taken.';
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = db()->prepare('INSERT INTO teachers (username, password_hash, display_name, is_admin) VALUES (?, ?, ?, 0)');
                $stmt->execute([$username, $hash, $display_name]);
                $success = "Account created for $display_name. Share the username and password with them directly.";
            }
        }
    } elseif ($action === 'reset_password') {
        $id = (int)($_POST['id'] ?? 0);
        $password = (string)($_POST['password'] ?? '');
        if (strlen($password) < 8) {
            $error = 'Password must be at least 8 characters.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = db()->prepare('UPDATE teachers SET password_hash = ? WHERE id = ?');
            $stmt->execute([$hash, $id]);
            $success = 'Password reset.';
        }
    } elseif ($action === 'delete') {
        $id = (int)($_POST['id'] ?? 0);
        if ($id === (int)$admin['id']) {
            $error = 'You cannot delete your own account.';
        } else {
            $stmt = db()->prepare('SELECT is_admin FROM teachers WHERE id = ?');
            $stmt->execute([$id]);
            $target = $stmt->fetch();
            if ($target && $target['is_admin']) {
                $countStmt = db()->query('SELECT COUNT(*) AS c FROM teachers WHERE is_admin = 1');
                if ((int)$countStmt->fetch()['c'] <= 1) {
                    $error = 'Cannot delete the last remaining admin.';
                }
            }
            if (!$error) {
                $stmt = db()->prepare('DELETE FROM teachers WHERE id = ?');
                $stmt->execute([$id]);
                $success = 'Account deleted.';
            }
        }
    }
}

$teachers = db()->query('
    SELECT t.id, t.username, t.display_name, t.is_admin, t.created_at, COUNT(l.id) AS lesson_count
    FROM teachers t
    LEFT JOIN lessons l ON l.teacher_id = t.id
    GROUP BY t.id
    ORDER BY t.created_at ASC
')->fetchAll();

$active = 'admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Teachers - Speaking Club Portal</title>
<link rel="stylesheet" href="<?= av('assets/css/style.css') ?>">
<style>
    .create-form { display: flex; gap: 12px; flex-wrap: wrap; align-items: flex-end; }
    .create-form .field { flex: 1; min-width: 180px; margin-bottom: 0; }
    .create-form .pw-wrap { display: flex; gap: 6px; }
    .inline-form { display: flex; gap: 6px; align-items: center; }
    .inline-form input[type="password"] { width: 150px; padding: 7px 9px; border: 1.5px solid var(--border); border-radius: 7px; font-size: 0.85em; }
</style>
</head>
<body>
<div class="app-shell">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="main">
        <div class="main-header">
            <div>
                <h1>Manage Teachers</h1>
                <p>Create logins for teachers. There is no public sign-up &mdash; every account is created here.</p>
            </div>
        </div>

        <?php if ($error): ?><div class="error-msg"><?= h($error) ?></div><?php endif; ?>
        <?php if ($success): ?><div class="success-msg"><?= h($success) ?></div><?php endif; ?>

        <div class="card" style="margin-bottom: 24px;">
            <h2 style="margin-bottom: 16px;">Create Teacher Account</h2>
            <form method="post" class="create-form" id="createForm">
                <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                <input type="hidden" name="action" value="create">
                <div class="field">
                    <label>Name</label>
                    <input type="text" name="display_name" required>
                </div>
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>
                <div class="field">
                    <label>Password</label>
                    <div class="pw-wrap">
                        <input type="text" name="password" id="newPassword" required minlength="8">
                        <button type="button" class="btn btn-outline btn-sm" id="genPwBtn">Generate</button>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Create Account</button>
            </form>
        </div>

        <table class="data-table">
            <thead>
                <tr><th>Name</th><th>Username</th><th>Role</th><th>Lessons</th><th>Joined</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php foreach ($teachers as $t): ?>
                    <tr>
                        <td><?= h($t['display_name']) ?></td>
                        <td><?= h($t['username']) ?></td>
                        <td><span class="badge <?= $t['is_admin'] ? 'badge-admin' : 'badge-teacher' ?>"><?= $t['is_admin'] ? 'Admin' : 'Teacher' ?></span></td>
                        <td><?= (int)$t['lesson_count'] ?></td>
                        <td><?= h(date('M j, Y', strtotime($t['created_at']))) ?></td>
                        <td>
                            <div style="display:flex; gap:8px; align-items:center; flex-wrap:wrap;">
                                <form method="post" class="inline-form">
                                    <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                                    <input type="hidden" name="action" value="reset_password">
                                    <input type="hidden" name="id" value="<?= (int)$t['id'] ?>">
                                    <input type="password" name="password" placeholder="New password" minlength="8">
                                    <button type="submit" class="btn btn-outline btn-sm">Reset</button>
                                </form>
                                <?php if ((int)$t['id'] !== (int)$admin['id']): ?>
                                    <form method="post" onsubmit="return confirm('Delete this account? Their lessons will also be deleted.');">
                                        <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?= (int)$t['id'] ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</div>
<script>
document.getElementById('genPwBtn').addEventListener('click', () => {
    const bytes = new Uint8Array(6);
    crypto.getRandomValues(bytes);
    const pw = Array.from(bytes, b => b.toString(16).padStart(2, '0')).join('');
    document.getElementById('newPassword').value = pw;
});
</script>
</body>
</html>
