<?php
declare(strict_types=1);

function speaking_club_config(): array {
    static $config = null;
    if ($config === null) {
        $path = '/home/u856637812/config/speaking_club_config.php';
        if (!is_file($path)) {
            http_response_code(500);
            die('Server misconfigured: missing config file. See config.sample.php for setup instructions.');
        }
        $config = require $path;
    }
    return $config;
}

function db(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        $cfg = speaking_club_config();
        $dsn = "mysql:host={$cfg['db_host']};dbname={$cfg['db_name']};charset=utf8mb4";
        $pdo = new PDO($dsn, $cfg['db_user'], $cfg['db_pass'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    return $pdo;
}

// Appends a filemtime-based version query string so browsers never serve a
// stale cached copy of an asset after a deploy.
function av(string $relativePath): string {
    $full = __DIR__ . '/../' . $relativePath;
    $v = @filemtime($full) ?: time();
    return $relativePath . '?v=' . $v;
}
