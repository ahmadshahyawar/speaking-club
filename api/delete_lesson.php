<?php
declare(strict_types=1);
require_once __DIR__ . '/../includes/auth.php';

require_admin();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}
require_csrf();

$id = (int)($_POST['id'] ?? 0);
$stmt = db()->prepare('SELECT level FROM lessons WHERE id = ?');
$stmt->execute([$id]);
$row = $stmt->fetch();

if ($row) {
    $stmt = db()->prepare('DELETE FROM lessons WHERE id = ?');
    $stmt->execute([$id]);
}

$level = $row['level'] ?? 'beginner';
header('Location: ../dashboard.php?level=' . urlencode($level) . '&deleted=1');
exit;
