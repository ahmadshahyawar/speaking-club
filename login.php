<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/auth.php';

if (current_teacher()) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_csrf();
    $username = trim((string)($_POST['username'] ?? ''));
    $password = (string)($_POST['password'] ?? '');

    $stmt = db()->prepare('SELECT id, password_hash FROM teachers WHERE username = ?');
    $stmt->execute([$username]);
    $row = $stmt->fetch();

    if ($row && password_verify($password, $row['password_hash'])) {
        login_teacher((int)$row['id']);
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Incorrect username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Log in - Speaking Club Portal</title>
<link rel="stylesheet" href="<?= av('assets/css/style.css') ?>">
</head>
<body>
<div class="auth-page">
    <div class="auth-brand-panel">
        <div class="logo-dot">🎙️</div>
        <h1>Speaking Club</h1>
        <p>A shared home for every speaking-club lesson: vocabulary, warm-ups, games and discussion questions, organized by level and ready to present.</p>
    </div>
    <div class="auth-form-panel">
        <div class="auth-form-inner">
            <h2>Welcome back</h2>
            <div class="subtitle">Log in with the account your administrator created for you.</div>
            <?php if ($error): ?><div class="error-msg"><?= h($error) ?></div><?php endif; ?>
            <form method="post">
                <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="<?= h($_POST['username'] ?? '') ?>" required autocomplete="username" autofocus>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn btn-block">Log in</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
