# Projeto de Desenvolvimento Web Full Stack

Este repositório contém os códigos e exemplos práticos desenvolvidos com base nos conceitos fundamentais da arquitetura Cliente x Servidor para o ambiente web. O projeto aborda a integração completa das tecnologias de *frontend* (HTML, CSS e JavaScript) e de *backend* (PHP e Banco de Dados).

## 📚 Tópicos e Tecnologias Abordadas

### 1. HTML5 

* O HTML é a linguagem responsável por estabelecer a estrutura base da página web através de um sistema hierárquico de tags.


* A estruturação do documento prioriza a semântica, utilizando tags lógicas como `<header>`, `<nav>`, `<main>`, `<section>` e `<footer>` para organizar o conteúdo.


* Há a implementação prática de tabelas HTML (utilizando linhas, colunas e cabeçalhos), listas (ordenadas, não ordenadas)


* Construção de formulários utilizando diversos tipos de entrada e validação nativa de dados diretamente no lado cliente, aplicando atributos como `required`, `pattern` e limites de tamanho.



### 2. CSS3 (Estilização e Layout)

* O CSS (Cascading Style Sheets) controla de forma isolada toda a apresentação e o layout visual das páginas geradas pelo HTML.


* A estilização dimensional baseia-se no *Box Model* (modelo de caixa), manipulando margens (*margin*), bordas (*border*), preenchimentos (*padding*) e o conteúdo em si.


* Os elementos recebem estilos interativos por meio de pseudoclasses (como `:hover` e `:active`) e recursos específicos com pseudoelementos (como `::before` e `::first-letter`).


* O layout foi adaptado para variados tamanhos de tela utilizando o conceito de Design Responsivo, por meio da abordagem *Mobile First*, layouts fluidos e expressões de *media queries*.


* Uso de frameworks CSS, como o Bootstrap, para agilizar a criação de telas a partir de um sistema estruturado de *grids* (linhas e colunas).



### 3. JavaScript (Interatividade, DOM Manipulation)

* A linguagem atua do lado cliente (*client-side*) fornecendo interatividade sem a necessidade de recarregar a página, através da manipulação de propriedades e eventos na árvore DOM.


* O código utiliza sintaxes modernas (variáveis de escopo de bloco `let` e `const`), funções comuns e *arrow functions `(=>)`*, além de fluxos de controle com laços (`for`, `while`) e estruturas condicionais (`if`, `switch`).


* Manipulação de vetores (*arrays*) para gerenciar coleções de dados, utilizando as propriedades de tamanho (`length`) e funções embutidas de adição e remoção (`push`, `pop`, `splice`).


* Implementação do recurso AJAX, utilizando tanto o objeto `XMLHttpRequest` quanto a API `Fetch`, para realizar requisições assíncronas e consumir ou transmitir pacotes de dados compactos no formato JSON.



### 4. PHP e Bancos de Dados (Backend)

* Os *scripts* server-side foram construídos em PHP para processar de forma dinâmica as requisições HTTP e extrair dados oriundos de formulários através de métodos `$_POST` e `$_GET`.


* O sistema tira proveito do paradigma de Programação Orientada a Objetos (POO), modularizando o código por meio de classes, atributos e métodos, além do tratamento seguro de exceções (blocos `try/catch`).


* A comunicação com os Sistemas Gerenciadores de Bancos de Dados (como MySQL ou PostgreSQL) é feita via PDO (*PHP Data Objects*), criando uma camada de abstração eficiente.


* A execução das operações CRUD (Criar, Ler, Atualizar, Deletar) implementa uma forte barreira de segurança cibernética; a utilização do método genérico `prepare`, junto ao `execute` com *bind* de variáveis (parâmetros nomeados), evita vulnerabilidades de Injeção de SQL (*SQL Injection*).



<!-- ## 🚀 Como Executar o Projeto

1. **Requisitos de Ambiente:** Para visualizar plenamente a aplicação, é necessário possuir um servidor web com suporte a PHP (como o Apache) e um banco de dados MySQL ou PostgreSQL devidamente instalados.


2. **Hospedagem Local:** Insira a pasta deste projeto no diretório base do seu servidor local (ex: a pasta `htdocs` para usuários do XAMPP, ou a pasta `/var/www/html` em distribuições Linux).
3. **Setup do Banco de Dados:** Execute o script SQL (fornecido na raiz do repositório) no seu banco de dados para gerar as tabelas. Em seguida, altere as constantes de conexão (`HOST`, `DBNAME`, `USER` e `PASSWORD`) no script PHP de abstração PDO para que a aplicação consiga autenticar.


4. **Rodando a Aplicação:** Abra o seu navegador web (Google Chrome, Firefox, etc.) e acesse a rota local `http://localhost/nome-da-pasta` para interagir com o sistema completo. -->