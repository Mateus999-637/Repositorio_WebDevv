# CSS

**O CSS** (*Cascading Style Sheets*, ou folhas de estilo em cascata) é a linguagem que cuida da **aparência** de uma página web. O HTML define a estrutura do conteúdo (títulos, parágrafos, listas) e o CSS define como esse conteúdo é apresentado: cores, fontes, espaçamentos e posição na tela.

## Origem

O CSS surgiu em meados dos anos 1990, quando a web crescia e o HTML começava a ser usado também para formatar visualmente as páginas, o que deixava o código confuso. A proposta foi **separar estrutura e apresentação**: o HTML fica só com o conteúdo, e um arquivo à parte cuida do estilo. A primeira versão oficial (CSS1) foi publicada pelo W3C em 1996. A versão atual, o **CSS3**, é dividida em módulos e trouxe cores mais flexíveis, web fontes, bordas arredondadas, sombras, gradientes, animações e novos seletores.

## Principais funcionalidades

- **Seletores:** apontam qual elemento será estilizado (por tag, `.classe`, `#id`, atributo ou relação entre elementos, como `h1 > p`).
- **Cores:** nomes (`blue`), hexadecimal (`#FFFFFF`), `rgb()`/`rgba()` e `hsl()`/`hsla()`.
- **Texto e fontes:** `font-family`, `font-size`, `font-weight`, `font-style`, `text-align`, `line-height`, `letter-spacing` e web fontes com `@font-face`.
- **Box model:** todo elemento é uma caixa com `content`, `padding`, `border` e `margin`.
- **Posicionamento e layout:** `position` (`static`, `relative`, `absolute`, `fixed`, `sticky`) com `top`, `right`, `bottom` e `left`, além de layouts em colunas e grid.
- **Pseudoclasses e pseudoelementos:** estilos para estados (`:hover`, `:active`, `:first-child`) e partes de um elemento (`::before`, `::after`, `::first-letter`).
- **Cascata:** quando há estilos conflitantes, valem as regras de herança, especificidade (`id` > `classe` > tag) e ordem (inline > interno > externo). O `!important` força a prioridade.
- **Atalhos (shorthand):** `margin`, `padding`, `border`, `background` e `font` resumem várias propriedades em uma linha.

## Como aplicar no HTML

```html
<!-- Inline (pra modificações pontuais) -->
<p style="color: blue;">Texto</p>

<!-- Interno(meh, utiliza como uma prévia) -->
<style> p { color: blue; } </style>

<!-- Externo (método mais recomendado) -->
<link rel="stylesheet" href="estilos.css">
```