<?php
$titulo = "Boletim Escolar - Cadastro";
include "includes/topo.php";
?>
    <section class="cartao">
      <h2>Notas da turma</h2>
      <p class="dica">Informe o nome e as notas de P1 e P2 (de 0 a 10). A média aparece enquanto você digita.</p>

      <!-- action aponta para o PHP; os "name" dos campos viram índices em $_POST -->
      <form id="form-boletim" action="resultado.php" method="post">
        <div id="lista-alunos"></div>

        <div class="acoes">
          <button type="button" id="btn-add" class="btn secundario">+ Adicionar aluno</button>
          <button type="submit" class="btn">Calcular boletim</button>
        </div>
        <p id="msg-erro" class="msg-erro" role="alert"></p>
      </form>
    </section>
<?php
include "includes/rodape.php";
?>
  <script src="assets/js/script.js" defer></script>
</body>
</html>
