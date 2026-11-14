<?php
require_once __DIR__ . "/includes/funcoes.php";

if ($_SERVER["REQUEST_METHOD"] !== "GET" && $_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Allow: GET, POST");
    exibir_erro(405, "Método não permitido.");
}

$id = filter_input(
    $_SERVER["REQUEST_METHOD"] === "POST" ? INPUT_POST : INPUT_GET,
    "id",
    FILTER_VALIDATE_INT
);
if ($id === false || $id === null || $id < 1) {
    exibir_erro(400, "ID inválido.");
}

try {
    require __DIR__ . "/db.php";
    $stmt = $pdo->prepare("SELECT id, nome, plataforma FROM jogos WHERE id = ?");
    $stmt->execute([$id]);
    $jogo = $stmt->fetch();
    if (!$jogo) {
        exibir_erro(404, "Jogo não encontrado.");
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $resultado = validar_jogo($_POST["nome"] ?? null, $_POST["plataforma"] ?? null);
        if (count($resultado["erros"]) > 0) {
            exibir_erro(422, implode(" ", $resultado["erros"]));
        }

        $stmt = $pdo->prepare("UPDATE jogos SET nome = ?, plataforma = ? WHERE id = ?");
        $stmt->execute([$resultado["jogo"]["nome"], $resultado["jogo"]["plataforma"], $id]);
        header("Location: index.php?status=atualizado");
        exit;
    }
} catch (PDOException $erro) {
    reportar_erro_banco($erro);
}

$titulo = "Editar jogo";
include __DIR__ . "/includes/topo.php";
?>
    <section class="cartao">
      <h2>Editar jogo</h2>
      <form action="editar.php" method="post" class="form-jogo">
        <input type="hidden" name="id" value="<?php echo (int) $jogo["id"]; ?>">
        <label for="nome">Nome do jogo</label>
        <input id="nome" name="nome" type="text" maxlength="100" required value="<?php echo escapar($jogo["nome"]); ?>">
        <label for="plataforma">Plataforma</label>
        <input id="plataforma" name="plataforma" type="text" maxlength="50" required value="<?php echo escapar($jogo["plataforma"]); ?>">
        <div class="acoes">
          <button type="submit" class="btn">Salvar alteração</button>
          <a class="btn secundario" href="index.php">Cancelar</a>
        </div>
      </form>
    </section>
<?php include __DIR__ . "/includes/rodape.php"; ?>
</body>
</html>
