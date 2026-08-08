<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/auth.php';

$teacher = require_login();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf();
    $current = (string)($_POST['current_password'] ?? '');
    $new = (string)($_POST['new_password'] ?? '');
    $confirm = (string)($_POST['confirm_password'] ?? '');

    $stmt = db()->prepare('SELECT password_hash FROM teachers WHERE id = ?');
    $stmt->execute([$teacher['id']]);
    $row = $stmt->fetch();

    if (!$row || !password_verify($current, $row['password_hash'])) {
        $error = 'Current password is incorrect.';
    } elseif (strlen($new) < 8) {
        $error = 'New password must be at least 8 characters.';
    } elseif ($new !== $confirm) {
        $error = 'New passwords do not match.';
    } else {
        $hash = password_hash($new, PASSWORD_DEFAULT);
        $stmt = db()->prepare('UPDATE teachers SET password_hash = ? WHERE id = ?');
        $stmt->execute([$hash, $teacher['id']]);
        $success = 'Password updated.';
    }
}

$active = 'password';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Password - Speaking Club Portal</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="app-shell">
    <?php include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="main">
        <div class="main-header">
            <div>
                <h1>Change Password</h1>
                <p>Update your own login password.</p>
            </div>
        </div>

        <div class="card" style="max-width: 420px;">
            <?php if ($error): ?><div class="error-msg"><?= h($error) ?></div><?php endif; ?>
            <?php if ($success): ?><div class="success-msg"><?= h($success) ?></div><?php endif; ?>
            <form method="post">
                <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                <div class="field">
                    <label>Current password</label>
                    <input type="password" name="current_password" required autocomplete="current-password">
                </div>
                <div class="field">
                    <label>New password</label>
                    <input type="password" name="new_password" required minlength="8" autocomplete="new-password">
                </div>
                <div class="field">
                    <label>Confirm new password</label>
                    <input type="password" name="confirm_password" required minlength="8" autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-success btn-block">Update Password</button>
            </form>
        </div>
    </main>
</div>
</body>
</html>
