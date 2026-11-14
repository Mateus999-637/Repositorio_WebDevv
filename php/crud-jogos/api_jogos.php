<?php
require_once __DIR__ . "/includes/funcoes.php";
header("Content-Type: application/json; charset=utf-8");

try {
    require __DIR__ . "/db.php";
    $jogos = $pdo->query("SELECT id, nome, plataforma FROM jogos ORDER BY id DESC")->fetchAll();
    echo json_encode($jogos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
} catch (PDOException $erro) {
    error_log("Falha na consulta da API de jogos: " . $erro->getMessage());
    http_response_code(500);
    echo json_encode(["erro" => "Não foi possível consultar os jogos."], JSON_UNESCAPED_UNICODE);
} catch (JsonException $erro) {
    error_log("Falha ao gerar JSON da API de jogos: " . $erro->getMessage());
    http_response_code(500);
    echo json_encode(["erro" => "Não foi possível gerar a resposta."], JSON_UNESCAPED_UNICODE);
}
