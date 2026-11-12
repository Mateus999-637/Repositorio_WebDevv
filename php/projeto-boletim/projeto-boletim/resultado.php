<?php
require_once "includes/funcoes.php";


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$resultado = validar_alunos(
    $_POST["nome"] ?? [],
    $_POST["p1"] ?? [],
    $_POST["p2"] ?? []
);
$alunos = $resultado["alunos"];
$erros = $resultado["erros"];

$soma = 0;
$melhor = null;
$aprovados = 0;
foreach ($alunos as $a) {
    $soma += $a["media"];
    if ($melhor === null || $a["media"] > $melhor["media"]) {
        $melhor = $a;
    }
    if ($a["situacao"] === "Aprovado") {
        $aprovados++;
    }
}
$mediaTurma = count($alunos) > 0 ? $soma / count($alunos) : 0;

$titulo = "Boletim Escolar - Resultado";
include "includes/topo.php";
?>
    <section class="cartao">
      <h2>Resultado</h2>

      <?php if (count($erros) > 0): ?>
        <div class="aviso">
          <strong>Alguns dados foram ignorados:</strong>
          <ul>
            <?php foreach ($erros as $erro): ?>
              <li><?php echo htmlspecialchars($erro); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if (count($alunos) === 0): ?>
        <p>Nenhum aluno válido foi enviado.</p>
      <?php else: ?>
        <div class="tabela-wrap">
          <table>
            <thead>
              <tr><th>Aluno</th><th>P1</th><th>P2</th><th>Média</th><th>Situação</th></tr>
            </thead>
            <tbody>
              <?php foreach ($alunos as $a): ?>
                <tr>
                  <td><?php echo htmlspecialchars($a["nome"]); ?></td>
                  <td><?php echo number_format($a["p1"], 1, ",", "."); ?></td>
                  <td><?php echo number_format($a["p2"], 1, ",", "."); ?></td>
                  <td><?php echo number_format($a["media"], 2, ",", "."); ?></td>
                  <td><span class="selo <?php echo classe_situacao($a["situacao"]); ?>"><?php echo $a["situacao"]; ?></span></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <ul class="resumo">
          <li>Média da turma: <strong><?php echo number_format($mediaTurma, 2, ",", "."); ?></strong></li>
          <li>Aprovados: <strong><?php echo $aprovados; ?> de <?php echo count($alunos); ?></strong></li>
          <li>Maior média: <strong><?php echo htmlspecialchars($melhor["nome"]); ?> (<?php echo number_format($melhor["media"], 2, ",", "."); ?>)</strong></li>
        </ul>
      <?php endif; ?>

      <a class="btn secundario" href="index.php">&larr; Voltar</a>
    </section>
<?php include "includes/rodape.php"; ?>
</body>
</html>
