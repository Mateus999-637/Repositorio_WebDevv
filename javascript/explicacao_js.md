# JavaScript ↓

**JavaScript** é uma linguagem de programação leve e dinâmica que dá **comportamento** às páginas web. Com ela, a página reage ao usuário: valida formulários, abre janelas, atualiza partes do conteúdo e muito mais, sem precisar recarregar.

## Origem ↓↓

No início da web, as páginas eram só documentos estáticos. Para dar mais interação, a **Netscape** criou o **LiveScript**, uma linguagem simples cujos scripts rodavam dentro do próprio navegador. Ela foi criada por **Brendan Eich**, em 1995, e logo ganhou o nome JavaScript. Apesar do nome, **não tem relação com Java**: são linguagens diferentes.

Para garantir que o código funcione do mesmo jeito em navegadores diferentes, a linguagem foi padronizada como **ECMAScript** (ECMA-262, da Ecma International). O ECMAScript é a especificação, e o JavaScript é a implementação mais conhecida dela. Versões mais novas, como o **ES6 (2015)**, trouxeram `let`, `const`, arrow functions e template literals.

Hoje o JavaScript também roda fora do navegador, por exemplo no **Node.js**.

## Principais funcionalidades ↓↓↓

- **Manipulação do DOM:** acessa e altera o HTML da página (`getElementById`, `querySelector`, `createElement`, `appendChild`, `innerHTML`, `textContent`).
- **Eventos:** reage a cliques, envio de formulários e mudanças (`onclick`, `onchange`, `addEventListener`).
- **Variáveis:** `var` (evitar), `let` (valor que muda) e `const` (valor fixo), com escopo de bloco.
- **Funções:** declaradas, anônimas e arrow functions (`(x) => x * 2`).
- **Condicionais:** `if/else`, `switch`, operador ternário e comparação estrita (`===`).
- **Repetição:** `for`, `while`, `do-while`, com `break`, `continue` e rótulos.
- **Arrays e objetos:** `push`, `map`, `length` e objetos como `{ nome, nota }`.
- **Expressões regulares:** validam texto, como e-mails e nomes de usuário.
- **Template literals:** strings com crase e interpolação (`` `Olá ${nome}` ``).
- **Caixas de diálogo:** `alert`, `prompt` e `console.log`.

## Como incluir na página ↓↓↓↓

```html
<!-- Inline -->
<button onclick="alert('Oi!')">Clique</button>

<!-- Arquivo externo (recomendado), com defer -->
<script src="./script/script.js" defer></script>
```

O atributo `defer` faz o script rodar só depois que o HTML foi carregado, sem bloquear a página. O `async` executa assim que o arquivo chega, sem garantir a ordem.

## Onde roda

No **navegador** (lado do cliente), conversando com o DOM, e também no servidor, com Node.js.