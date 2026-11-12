# O PHP

**PHP** (*Hypertext Preprocessor*) é uma linguagem de script de código aberto, voltada para o desenvolvimento web **do lado do servidor**. Ela gera páginas dinâmicas, ou seja, com conteúdo personalizado: o servidor executa o código PHP e envia ao navegador apenas o HTML resultante.

## Origem

O PHP foi criado em **1994 por Rasmus Lerdorf**, inicialmente como um conjunto de programas **CGI escritos em C**, o *PHP Tools*, para controlar a própria página pessoal. Em 1995, Rasmus abriu o código para o público e a comunidade passou a corrigir bugs e melhorar a ferramenta. Nesse mesmo ano ela virou o **PHP/FI** (*Forms Interpreter*), já com variáveis no estilo Perl, leitura automática dos campos de formulários e HTML embutido. Foi a base do que hoje conhecemos como PHP.

A primeira finalidade da linguagem foi justamente **interpretar formulários HTML no servidor**, dando dinamismo às páginas.

## Principais funcionalidades

- **Código embutido no HTML**, entre as tags `<?php` e `?>`.
- **Variáveis sem tipo declarado**, com `$` (`$nome`), em uma linguagem fracamente tipada.
- **Dados de formulários:** `$_GET`, `$_POST` e `$_REQUEST` recebem o que o usuário envia.
- **Operadores:** aritméticos, de atribuição, de comparação (incluindo `===` e o `<=>`) e lógicos.
- **Condicionais:** `if`, `else`, `elseif`, `switch` e operador ternário.
- **Repetição:** `while`, `do-while`, `for` e `foreach`.
- **Arrays:** numéricos, associativos, mistos e multidimensionais, com funções como `count`, `array_push`, `array_unshift` e `array_splice`.
- **Funções:** centenas de nativas e as criadas pelo desenvolvedor (`function nome() { ... }`).
- **Orientação a objetos:** classes, herança e interfaces.
- **Bancos de dados:** suporte a MySQL, PostgreSQL, Oracle, SQL Server, SQLite e outros.
- **Outros usos:** controle de acesso, processamento de dados e consumo de APIs.

## Exemplo

```php
<?php
$nome = "Maria";
echo "Olá, $nome!";
```

## Como executar

O PHP precisa de um servidor com suporte à linguagem. Opções:

- **XAMPP** (Apache + PHP), colocando os arquivos na pasta `htdocs`.
- Servidor embutido do PHP: `php -S localhost:8000`.

Em seguida, abra `http://localhost:8000/arquivo.php` no navegador.