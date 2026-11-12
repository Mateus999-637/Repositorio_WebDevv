<?php
require_once __DIR__ . "/../includes/funcoes.php";

function verificar($condicao, $mensagem)
{
    if (!$condicao) {
        throw new RuntimeException($mensagem);
    }
}

$mediaCalculada = calc_media(6, 8);
verificar(abs($mediaCalculada - 7) < 0.00001, "A média deve ser calculada corretamente.");
verificar(situacao(6) === "Aprovado", "Média 6 deve aprovar.");
verificar(situacao(4) === "Recuperação", "Média 4 deve indicar recuperação.");
verificar(situacao(3.99) === "Reprovado", "Média abaixo de 4 deve reprovar.");

$resultado = validar_alunos(
    ["Ana", "Bruno", "Carla"],
    ["6", "4", "10"],
    ["6", "4", "10"]
);
verificar(count($resultado["alunos"]) === 3, "Notas válidas devem ser aceitas.");
verificar($resultado["alunos"][0]["situacao"] === "Aprovado", "A média mínima de aprovação deve ser aceita.");
verificar($resultado["alunos"][1]["situacao"] === "Recuperação", "A média mínima de recuperação deve ser aceita.");

$resultado = validar_alunos(
    [["nome aninhado"], "Davi", "Eva"],
    ["8", ["nota aninhada"], "-1"],
    ["8", "7", "11"]
);
verificar(count($resultado["alunos"]) === 0, "Dados malformados ou fora do intervalo não devem ser aceitos.");
verificar(count($resultado["erros"]) === 3, "Cada registro inválido deve gerar um erro.");

$resultado = validar_alunos(["  "], ["8"], ["8"]);
verificar(count($resultado["alunos"]) === 0 && count($resultado["erros"]) === 1, "Nome vazio deve ser rejeitado.");

$resultado = validar_alunos([str_repeat("a", 101)], ["8"], ["8"]);
verificar(count($resultado["alunos"]) === 0 && count($resultado["erros"]) === 1, "Nome acima do limite deve ser rejeitado.");

$resultado = validar_alunos([str_repeat("á", 100)], ["8"], ["8"]);
verificar(count($resultado["alunos"]) === 1, "Nomes acentuados devem ser contados corretamente.");

$nomes = array_fill(0, LIMITE_ALUNOS + 1, "Aluno");
$notas = array_fill(0, LIMITE_ALUNOS + 1, "8");
$resultado = validar_alunos($nomes, $notas, $notas);
verificar(count($resultado["alunos"]) === LIMITE_ALUNOS, "O limite de alunos deve ser respeitado.");
verificar(count($resultado["erros"]) === 1, "O envio acima do limite deve informar o erro.");

$resultado = validar_alunos("não é uma lista", [], []);
verificar(count($resultado["alunos"]) === 0 && count($resultado["erros"]) === 1, "Formato de envio inválido deve gerar um erro.");

echo "Todos os testes passaram." . PHP_EOL;
