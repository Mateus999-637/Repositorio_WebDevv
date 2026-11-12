# Boletim Escolar (HTML + CSS + JavaScript + PHP)

Projeto de estudo que junta as quatro tecnologias do curso: o usuário cadastra alunos com as notas de P1 e P2, o servidor calcula as médias e mostra a situação de cada um e um resumo da turma.

## O que cada tecnologia faz aqui

| Tecnologia | Papel no projeto | Arquivos |
|---|---|---|
| **HTML** | Estrutura das páginas e do formulário | `index.php`, `resultado.php` (tags HTML) |
| **CSS** | Visual: cores, grid, tabela, selos de situação, responsividade | `assets/css/style.css` |
| **JavaScript** | Adiciona e remove linhas, mostra a média ao vivo e valida antes de enviar | `assets/js/script.js` |
| **PHP** | Recebe os dados por POST, valida de novo, calcula médias e gera a página de resultado | `resultado.php`, `includes/` |

## Conceitos do curso que aparecem

- **PHP:** `$_POST`, arrays associativos e multidimensionais, `foreach`, `for`, `if/elseif/else`, `switch`, funções próprias, `include`/`require_once`, sintaxe alternativa (`if: ... endif`) misturada com HTML.
- **JavaScript:** manipulação do DOM, eventos, `createElement`, template literals e validação.
- **CSS:** variáveis, grid, `@media`, pseudoclasses (`:focus`, `:hover`).
- **Segurança básica:** `htmlspecialchars()` na saída e validação no servidor, porque a validação do JavaScript pode ser burlada.

## Estrutura

```
projeto-boletim/
├── index.php            # formulário
├── resultado.php        # processamento e resultado
├── includes/
│   ├── funcoes.php      # calc_media, situacao, classe_situacao
│   ├── topo.php         # <head> e cabeçalho
│   └── rodape.php       # rodapé (ano gerado pelo PHP)
└── assets/
    ├── css/style.css
    └── js/script.js
```

## Regra de situação

- Média **maior ou igual a 6,0**: Aprovado
- Média **de 4,0 a 5,99**: Recuperação
- Média **abaixo de 4,0**: Reprovado
- Cada envio aceita até **100 alunos**, com nomes de até **100 caracteres**.

## Testes

Na pasta do projeto, execute:

```sh
php tests/run.php
```

Os testes cobrem as faixas de média, notas inválidas, campos malformados e os limites de alunos e nomes.

## Como executar

É preciso um servidor com PHP.

- **XAMPP:** copie a pasta `projeto-boletim` para `htdocs` e abra `http://localhost/projeto-boletim/`.
- **Servidor embutido:** dentro da pasta, rode `php -S localhost:8000` e abra `http://localhost:8000`.

Abrir o `index.php` direto no navegador (duplo clique) não funciona, porque o PHP precisa ser executado pelo servidor.

## Ideias para evoluir

- Salvar os alunos em banco de dados (SQLite ou MySQL).
- Permitir editar e excluir alunos.
- Exportar o boletim para CSV.
- Adicionar mais provas ou pesos diferentes.
