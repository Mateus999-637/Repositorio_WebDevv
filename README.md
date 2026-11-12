# Projeto de Desenvolvimento Web 
Este repositório reúne estudos e exemplos práticos dos conceitos fundamentais de desenvolvimento web. Os materiais estão organizados por tecnologia e incluem páginas HTML, exercícios de CSS e JavaScript, além de um projeto em PHP que processa dados no servidor.

## 📚 Tópicos e Tecnologias Abordadas

### 1. HTML5

- Estrutura de páginas por meio de tags e elementos hierárquicos.
- Uso de tags semânticas, como `<header>`, `<nav>`, `<main>`, `<section>` e `<footer>`.
- Exemplos práticos de listas, tabelas e formulários.
- Tipos de entrada e validação nativa de formulários com atributos como `required`, `pattern` e limites de tamanho.

### 2. CSS3 (Estilização e Layout)

- Estilização e apresentação de páginas HTML.
- Box Model: margens (*margin*), bordas (*border*), preenchimentos (*padding*) e conteúdo.
- Pseudoclasses, como `:hover` e `:active`, e pseudoelementos, como `::before` e `::first-letter`.
- Design responsivo com layouts fluidos e *media queries*.
- Guia introdutório sobre frameworks CSS, incluindo Bootstrap.

### 3. JavaScript (Interatividade e Manipulação do DOM)

- Manipulação de elementos e eventos do DOM para responder às ações do usuário.
- Variáveis `let` e `const`, funções, *arrow functions*, condicionais e laços.
- Arrays e operações para adicionar, remover e percorrer dados.
- Exercícios de formulários, expressões regulares, modais e interação com a página.
- Guia introdutório sobre frameworks JavaScript.

### 4. PHP (Processamento no Servidor)

- Leitura de dados de formulários com `$_POST` e `$_GET`.
- Condicionais, laços, arrays, funções próprias e inclusão de arquivos.
- Validação de dados no servidor e geração de páginas HTML.
- O projeto de boletim usa `htmlspecialchars()` para escapar valores apresentados na página.


## - Navegação

- **HTML:** [guia](html/explicacao_html.md), [página de notícia](html/01%20-%20criacao-pag-noticia/index.html), [formulário](html/02%20-%20form/index.html) e [tabela](html/03%20-%20table/index.html).
- **CSS:** [guia](css/explicacao_css.md), [exemplos de estilos](css/) e [frameworks](css/frameworks_css/frameworks.md).
- **JavaScript:** [guia](javascript/explicacao_js.md), [exercícios](javascript/) e [frameworks](javascript/frameworksjs/frameworks_js.md).
- **PHP:** [guia](php/explicacao_php.md), [exemplo inicial](php/hello_world/ola.php) e [projeto de boletim](php/projeto-boletim/projeto-boletim/README.md).

## - Como executar

As páginas `.html` podem ser abertas diretamente no navegador. Para executar PHP, é necessário ter PHP instalado e iniciar um servidor local:

1. Abra um terminal na pasta `php/projeto-boletim/projeto-boletim`.
2. Execute `php -S localhost:8000`.
3. Acesse `http://localhost:8000`.

Para executar os testes do boletim, use `php tests/run.php` na mesma pasta. Mais detalhes estão no [README do projeto](php/projeto-boletim/projeto-boletim/README.md).
