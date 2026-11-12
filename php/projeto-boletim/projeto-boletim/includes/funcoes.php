<?php
// Funções reutilizáveis do projeto (conceito de modularização)

const LIMITE_ALUNOS = 100;
const LIMITE_CARACTERES_NOME = 100;

function calc_media($n1, $n2)
{
    return ($n1 + $n2) / 2;
}

function validar_alunos($nomes, $p1s, $p2s)
{
    if (!is_array($nomes) || !is_array($p1s) || !is_array($p2s)) {
        return [
            "alunos" => [],
            "erros" => ["Os dados enviados estão em um formato inválido."],
        ];
    }

    $alunos = [];
    $erros = [];
    $numeroAluno = 0;

    foreach ($nomes as $indice => $nomeRecebido) {
        $numeroAluno++;
        if ($numeroAluno > LIMITE_ALUNOS) {
            $erros[] = "O limite é de " . LIMITE_ALUNOS . " alunos por envio.";
            break;
        }

        if (!is_string($nomeRecebido)) {
            $erros[] = "Aluno $numeroAluno: informe um nome válido.";
            continue;
        }

        $nome = trim($nomeRecebido);
        if ($nome === "") {
            $erros[] = "Aluno $numeroAluno: informe o nome.";
            continue;
        }

        $caracteresNome = [];
        $tamanhoNome = preg_match_all('/./us', $nome, $caracteresNome);
        if ($tamanhoNome === false || $tamanhoNome > LIMITE_CARACTERES_NOME) {
            $erros[] = "Aluno $numeroAluno: o nome deve ter até " . LIMITE_CARACTERES_NOME . " caracteres.";
            continue;
        }

        $p1 = $p1s[$indice] ?? null;
        $p2 = $p2s[$indice] ?? null;
        $p1Valido = (is_string($p1) || is_int($p1) || is_float($p1)) && is_numeric($p1);
        $p2Valido = (is_string($p2) || is_int($p2) || is_float($p2)) && is_numeric($p2);

        if (!$p1Valido || !$p2Valido || $p1 < 0 || $p1 > 10 || $p2 < 0 || $p2 > 10) {
            $erros[] = "Aluno $numeroAluno ($nome): as notas devem estar entre 0 e 10.";
            continue;
        }

        $p1 = (float) $p1;
        $p2 = (float) $p2;
        $media = calc_media($p1, $p2);

        $alunos[] = [
            "nome" => $nome,
            "p1" => $p1,
            "p2" => $p2,
            "media" => $media,
            "situacao" => situacao($media),
        ];
    }

    return [
        "alunos" => $alunos,
        "erros" => $erros,
    ];
}

function situacao($media)
{
    if ($media >= 6.0) {
        return "Aprovado";
    } elseif ($media >= 4.0) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

function classe_situacao($situacao)
{
    switch ($situacao) {
        case "Aprovado":
            return "ok";
        case "Recuperação":
            return "alerta";
        default:
            return "erro";
    }
}
