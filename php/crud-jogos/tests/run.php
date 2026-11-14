<?php
require_once __DIR__ . "/../includes/funcoes.php";

function verificar($condicao, $mensagem)
{
    if (!$condicao) {
        throw new RuntimeException($mensagem);
    }
}

$resultado = validar_jogo("  Stardew Valley  ", "  PC  ");
verificar($resultado["erros"] === [], "Dados válidos devem ser aceitos.");
verificar($resultado["jogo"] === ["nome" => "Stardew Valley", "plataforma" => "PC"], "Os campos devem ser limpos.");

$resultado = validar_jogo("", "PC");
verificar(count($resultado["erros"]) === 1, "Nome vazio deve ser rejeitado.");

$resultado = validar_jogo("Jogo", "");
verificar(count($resultado["erros"]) === 1, "Plataforma vazia deve ser rejeitada.");

$resultado = validar_jogo(str_repeat("a", 101), "PC");
verificar(count($resultado["erros"]) === 1, "Nome acima do limite deve ser rejeitado.");

$resultado = validar_jogo(str_repeat("á", 100), "PC");
verificar($resultado["erros"] === [], "O limite do nome deve contar caracteres, não bytes.");

$resultado = validar_jogo("Jogo", str_repeat("a", 51));
verificar(count($resultado["erros"]) === 1, "Plataforma acima do limite deve ser rejeitada.");

$resultado = validar_jogo(["nome inválido"], "PC");
verificar(count($resultado["erros"]) === 1, "Campos que não são texto devem ser rejeitados.");

$resultado = validar_jogo("Jogo", ["plataforma inválida"]);
verificar(count($resultado["erros"]) === 1, "Plataformas que não são texto devem ser rejeitadas.");

verificar(escapar("<jogo>") === "&lt;jogo&gt;", "A saída HTML deve ser escapada.");

echo "Todos os testes passaram." . PHP_EOL;
