<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function current_teacher(): ?array {
    if (empty($_SESSION['teacher_id'])) {
        return null;
    }
    static $teacher = null;
    if ($teacher === null) {
        $stmt = db()->prepare('SELECT id, username, display_name, is_admin FROM teachers WHERE id = ?');
        $stmt->execute([$_SESSION['teacher_id']]);
        $row = $stmt->fetch();
        $teacher = $row ?: false;
    }
    return $teacher ?: null;
}

function require_login(): array {
    $teacher = current_teacher();
    if ($teacher === null) {
        header('Location: login.php');
        exit;
    }
    return $teacher;
}

function require_admin(): array {
    $teacher = require_login();
    if (!$teacher['is_admin']) {
        http_response_code(403);
        die('Admin access only.');
    }
    return $teacher;
}

function login_teacher(int $id): void {
    session_regenerate_id(true);
    $_SESSION['teacher_id'] = $id;
}

function logout_teacher(): void {
    $_SESSION = [];
    session_destroy();
}

function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function require_csrf(): void {
    $token = $_POST['csrf_token'] ?? '';
    if (!is_string($token) || !hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
        http_response_code(403);
        die('Invalid CSRF token');
    }
}

function h(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
