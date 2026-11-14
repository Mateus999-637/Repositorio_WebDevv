<?php
function escapar($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, "UTF-8");
}

function validar_jogo($nomeRecebido, $plataformaRecebida)
{
    $erros = [];
    $nome = is_string($nomeRecebido) ? trim($nomeRecebido) : "";
    $plataforma = is_string($plataformaRecebida) ? trim($plataformaRecebida) : "";

    if ($nome === "") {
        $erros[] = "Informe o nome do jogo.";
    } else {
        $tamanhoNome = preg_match_all("/./us", $nome, $correspondencias);
        if ($tamanhoNome === false || $tamanhoNome > 100) {
            $erros[] = "O nome do jogo deve ter até 100 caracteres.";
        }
    }

    if ($plataforma === "") {
        $erros[] = "Informe a plataforma.";
    } else {
        $tamanhoPlataforma = preg_match_all("/./us", $plataforma, $correspondencias);
        if ($tamanhoPlataforma === false || $tamanhoPlataforma > 50) {
            $erros[] = "A plataforma deve ter até 50 caracteres.";
        }
    }

    return [
        "jogo" => ["nome" => $nome, "plataforma" => $plataforma],
        "erros" => $erros,
    ];
}

function exibir_erro($codigo, $mensagem)
{
    http_response_code($codigo);
    $titulo = "Não foi possível concluir a operação";
    include __DIR__ . "/topo.php";
    ?>
    <section class="cartao">
      <h2><?php echo escapar($titulo); ?></h2>
      <p class="mensagem-erro" role="alert"><?php echo escapar($mensagem); ?></p>
      <a class="btn secundario" href="index.php">Voltar para a lista</a>
    </section>
    <?php
    include __DIR__ . "/rodape.php";
    exit;
}

function reportar_erro_banco(PDOException $erro)
{
    error_log("Falha na operação do CRUD de jogos: " . $erro->getMessage());
    exibir_erro(500, "Não foi possível acessar o banco de dados. Confira a configuração do MySQL e tente novamente.");
}
