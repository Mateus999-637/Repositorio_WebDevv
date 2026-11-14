<?php
require_once __DIR__ . "/includes/funcoes.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Allow: POST");
    exibir_erro(405, "Método não permitido.");
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
if ($id === false || $id === null || $id < 1) {
    exibir_erro(400, "ID inválido.");
}

try {
    require __DIR__ . "/db.php";
    $stmt = $pdo->prepare("DELETE FROM jogos WHERE id = ?");
    $stmt->execute([$id]);
    if ($stmt->rowCount() === 0) {
        exibir_erro(404, "Jogo não encontrado.");
    }
} catch (PDOException $erro) {
    reportar_erro_banco($erro);
}

header("Location: index.php?status=excluido");
exit;
