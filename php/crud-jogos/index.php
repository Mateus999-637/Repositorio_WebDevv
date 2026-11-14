<?php
require_once __DIR__ . "/includes/funcoes.php";

try {
    require __DIR__ . "/db.php";
    $jogos = $pdo->query("SELECT id, nome, plataforma FROM jogos ORDER BY id DESC")->fetchAll();
} catch (PDOException $erro) {
    reportar_erro_banco($erro);
}

$mensagens = [
    "criado" => "Jogo cadastrado com sucesso.",
    "atualizado" => "Jogo atualizado com sucesso.",
    "excluido" => "Jogo excluído com sucesso.",
];
$status = $_GET["status"] ?? "";
$mensagem = is_string($status) && isset($mensagens[$status]) ? $mensagens[$status] : null;
$titulo = "Cadastro de jogos";
include __DIR__ . "/includes/topo.php";
?>
    <section class="cartao">
      <h2>Cadastrar jogo</h2>
      <p class="dica">Informe o nome e a plataforma do jogo.</p>
      <?php if ($mensagem !== null): ?>
        <p class="mensagem-sucesso" role="status"><?php echo escapar($mensagem); ?></p>
      <?php endif; ?>
      <form action="salvar.php" method="post" class="form-jogo">
        <label for="nome">Nome do jogo</label>
        <input id="nome" name="nome" type="text" maxlength="100" required>
        <label for="plataforma">Plataforma</label>
        <input id="plataforma" name="plataforma" type="text" maxlength="50" required>
        <button type="submit" class="btn">Cadastrar jogo</button>
      </form>
    </section>

    <section class="cartao">
      <div class="cabecalho-lista">
        <div>
          <h2>Jogos cadastrados</h2>
          <p class="dica">Edite ou exclua os registros salvos no banco de dados.</p>
        </div>
        <a class="btn secundario" href="consultar.html">Consultar com AJAX</a>
      </div>

      <?php if (count($jogos) === 0): ?>
        <p>Nenhum jogo cadastrado ainda.</p>
      <?php else: ?>
        <div class="tabela-wrap">
          <table>
            <thead>
              <tr><th>Nome</th><th>Plataforma</th><th>Ações</th></tr>
            </thead>
            <tbody>
              <?php foreach ($jogos as $jogo): ?>
                <tr>
                  <td><?php echo escapar($jogo["nome"]); ?></td>
                  <td><?php echo escapar($jogo["plataforma"]); ?></td>
                  <td class="acoes-registro">
                    <a class="btn pequeno" href="editar.php?id=<?php echo (int) $jogo["id"]; ?>">Editar</a>
                    <form action="excluir.php" method="post" class="form-excluir">
                      <input type="hidden" name="id" value="<?php echo (int) $jogo["id"]; ?>">
                      <button type="submit" class="btn perigo pequeno">Excluir</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </section>
<?php include __DIR__ . "/includes/rodape.php"; ?>
  <script src="assets/js/script.js" defer></script>
</body>
</html>
