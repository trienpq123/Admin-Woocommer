<?php
// bootstrap/create-database.php
$host = getenv('DB_HOST') ?: 'localhost';
$port = getenv('DB_PORT') ?: 3306;
$user = getenv('DB_USERNAME') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$database = getenv('DB_DATABASE') ?: 'cell_phones';

try {
    $pdo = new PDO(
        "mysql:host={$host}:{$port}",
        $user,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$database}`;");
    echo "Database '{$database}' created or already exists.\n";
} catch (Exception $e) {
    echo "Error creating database: " . $e->getMessage() . "\n";
    exit(1);
}
