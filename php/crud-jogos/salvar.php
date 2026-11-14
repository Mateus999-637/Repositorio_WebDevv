<?php
require_once __DIR__ . "/includes/funcoes.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Allow: POST");
    exibir_erro(405, "Método não permitido.");
}

$resultado = validar_jogo($_POST["nome"] ?? null, $_POST["plataforma"] ?? null);
if (count($resultado["erros"]) > 0) {
    exibir_erro(422, implode(" ", $resultado["erros"]));
}

try {
    require __DIR__ . "/db.php";
    $stmt = $pdo->prepare("INSERT INTO jogos (nome, plataforma) VALUES (?, ?)");
    $stmt->execute([$resultado["jogo"]["nome"], $resultado["jogo"]["plataforma"]]);
} catch (PDOException $erro) {
    reportar_erro_banco($erro);
}

header("Location: index.php?status=criado");
exit;
