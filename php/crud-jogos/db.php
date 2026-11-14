<?php
require_once __DIR__ . "/includes/funcoes.php";

$host = getenv("DB_HOST") ?: "127.0.0.1";
$nomeBanco = getenv("DB_NAME") ?: "jogos_aula";
$usuario = getenv("DB_USER") ?: "root";
$senha = getenv("DB_PASS") ?: "";
$dsn = "mysql:host=" . $host . ";dbname=" . $nomeBanco . ";charset=utf8mb4";

$pdo = new PDO($dsn, $usuario, $senha, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
]);
