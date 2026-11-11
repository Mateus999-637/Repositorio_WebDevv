Frameworks de CSS e suas características:

1 - Bootstrap

Origem: criado pela equipe do Twitter em 2011, depois passou a ser mantido de forma independente. É open source e hoje é o framework CSS mais popular.

Filosofia mobile-first: ele é responsivo e pensa primeiro nos celulares, depois nos desktops. Já vem com componentes prontos para uso, feitos em HTML, CSS e JavaScript.

Como funciona o grid: são 12 colunas e 5 breakpoints. Breakpoint é o ponto de quebra em que o layout se ajusta para uma resolução de tela diferente:

Breakpoint	Tela	Prefixo da classe	Largura máxima do container
Extra small	< 576px	.col-	automática
Small	≥ 576px	.col-sm-	540px
Medium	≥ 768px	.col-md-	720px
Large	≥ 992px	.col-lg-	960px
Extra large	≥ 1200px	.col-xl-	1140px

Outros detalhes do grid: o espaçamento entre colunas (gutter) é de 30px (15px de cada lado), e as colunas podem ser aninhadas e reordenadas.

Como instalar:

Incluir os arquivos CSS e JavaScript direto no HTML; ou
Usar um gerenciador de pacotes, como npm ou gem.

Para usar todas as funcionalidades, também é preciso incluir outras bibliotecas JavaScript: jQuery e Popper. E atenção à compatibilidade de versões, tanto com bibliotecas de terceiros quanto com funcionalidades que podem estar obsoletas ou depreciadas.

Dica prática do material: o Bootstrap tem muitas classes prontas, mas você precisa combiná-las com a marcação HTML indicada na documentação oficial. Um exemplo é a classe .table-striped: basta colocá-la no atributo class de uma tabela para criar o efeito zebra (cores alternadas nas linhas).

2 - Foundation

Origem: também criado em 2011, é um dos mais conhecidos e usados. É responsivo e mobile-first, como o Bootstrap.

Diferencial: usa nativamente o pré-processador de CSS chamado SASS.

Grid: também tem 12 colunas. Nas versões mais recentes, o grid básico foi substituído por um sistema novo, o XY grid, que trouxe alinhamento vertical e horizontal, dimensionamento automático e grid vertical completa.

Instalação: parecida com a do Bootstrap. Você inclui um arquivo CSS e outro JavaScript (ou usa um gerenciador de pacotes), e é recomendado incluir também o jQuery. Cuidado ao atualizar versões, porque algumas funcionalidades são descontinuadas e podem deixar de funcionar.

Recurso extra: o Foundation for Emails, voltado para criar HTML responsivo para e-mails.

3- Semantic UI

Diferencial: usa nativamente o pré-processador LESS e a biblioteca jQuery. Também é open source.

Ponto forte: as classes usam linguagem natural, com substantivos, por exemplo, o que deixa o código mais intuitivo de ler e escrever.

Instalação: igual à dos outros, com arquivos CSS e JS, mais o jQuery, ou via gerenciadores de pacotes.

Outros frameworks conhecidos
4 -Pure: considerado o mais leve, desenvolvido pelo Yahoo.
5- Materialize CSS: baseado no Material Design, criado pelo Google e usado em seus 6 - produtos.
7 - Bulma: feito só com CSS, sem JavaScript.
8 - Skeleton: minimalista, com apenas cerca de 400 linhas de código.