# Desenvolvimento Web

Repositório de estudos com exemplos de HTML, CSS, JavaScript e PHP, organizados por assunto e por exercícios práticos.

## Navegação

- **HTML:** [guia](html/explicacao_html.md), [notícia](html/01%20-%20criacao-pag-noticia/index.html), [formulário](html/02%20-%20form/index.html) e [tabela](html/03%20-%20table/index.html).
- **CSS:** [guia](css/explicacao_css.md), [estilos](css/) e [frameworks](css/frameworks_css/frameworks.md).
- **JavaScript:** [guia](javascript/explicacao_js.md), [exercícios](javascript/) e [frameworks](javascript/frameworksjs/frameworks_js.md).
- **PHP:** [guia](php/explicacao_php.md), exemplo inicial em `php/hello_world/` e o [projeto de boletim](php/projeto-boletim/projeto-boletim/README.md).

Alguns exercícios também têm seus próprios arquivos CSS ou JavaScript. As páginas HTML podem ser abertas diretamente no navegador. Para executar PHP, use um servidor com PHP instalado.

## Projeto de boletim

O boletim recebe nomes e notas por formulário, valida os dados no servidor, calcula médias e apresenta um resumo da turma. **Este exemplo não usa banco de dados.**

Para executá-lo:

1. Abra um terminal na pasta `php/projeto-boletim/projeto-boletim`.
2. Execute `php -S localhost:8000`.
3. Acesse `http://localhost:8000`.

O [README do projeto](php/projeto-boletim/projeto-boletim/README.md) descreve sua estrutura, regras e como executar os testes.

## Escopo

Os guias apresentam conceitos e tecnologias; nem todos são usados nos exemplos práticos deste repositório. Por exemplo, PDO, CRUD e requisições AJAX não fazem parte do boletim atual. São possíveis temas para exercícios futuros, não funcionalidades já implementadas.
