# HTML

**HTML** (*HyperText Markup Language*, ou linguagem de marcação de hipertexto) é a linguagem que define a **estrutura e o conteúdo** de uma página web. Ela diz o que cada trecho é (título, parágrafo, lista, imagem, link, formulário), e o navegador usa essa marcação para montar a página. O visual fica por conta do CSS e o comportamento, do JavaScript.

## Origem

O HTML foi criado no início dos anos 1990 por **Tim Berners-Lee**, no CERN, na Suíça, como parte da proposta da World Wide Web: uma forma de ligar documentos por meio de **hiperlinks** e compartilhá-los pela internet. A primeira especificação pública saiu em 1991, e a linguagem passou a ser padronizada, primeiro pelo IETF e depois pelo **W3C** e pelo WHATWG. A versão atual, o **HTML5**, trouxe tags semânticas (`<header>`, `<footer>`, `<section>`, `<nav>`), suporte nativo a áudio e vídeo, novos tipos de campos em formulários e a possibilidade de declarar estilos em escopo.

## Principais funcionalidades

- **Estrutura do documento:** `<html>`, `<head>` (metadados, título, links para CSS e scripts) e `<body>` (conteúdo visível).
- **Textos:** títulos (`<h1>` a `<h6>`), parágrafos (`<p>`), ênfase (`<strong>`, `<em>`) e quebras de linha.
- **Links e mídia:** `<a>` para hiperlinks, `<img>` para imagens, além de `<audio>` e `<video>`.
- **Listas e tabelas:** `<ul>`, `<ol>`, `<li>` e `<table>` com `<tr>`, `<th>` e `<td>`.
- **Formulários:** `<form>`, `<input>`, `<select>`, `<textarea>` e `<button>`, que enviam dados ao servidor por GET ou POST.
- **Tags semânticas (HTML5):** organizam a página em regiões com significado, o que ajuda na acessibilidade e nos mecanismos de busca.
- **Atributos:** `id`, `class`, `href`, `src`, `name` e outros, que configuram os elementos e servem de ponto de ligação com CSS e JavaScript.
- **Integração:** `<link>` para CSS, `<script>` para JavaScript e, em páginas dinâmicas, PHP embutido no arquivo.

## Exemplo

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Minha página</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <h1>Olá, mundo!</h1>
  <p id="mensagem">Meu primeiro parágrafo.</p>
  <script src="script.js" defer></script>
</body>
</html>
```

## Como visualizar

Salve o arquivo com a extensão `.html` e abra no navegador. Não precisa de servidor, ao contrário do PHP.