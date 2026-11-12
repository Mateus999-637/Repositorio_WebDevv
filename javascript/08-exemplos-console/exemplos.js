// só roda no console do navegador

// ---------- Funções ----------
function saudacao(nome) {
  return "Olá, " + nome + "!";
}
console.log(saudacao("Raphael"));

let quadrado = function (x) {
  return x * x;
}; // função anônima
let dobrar = (x) => x * 2; // arrow function
console.log(quadrado(2), dobrar(8));


let a = 10,
  b = 20;
if (a > b) console.log("A é maior que B");
else if (a < b) console.log("A é menor que B");
else console.log("A é igual a B");


console.log(5 == "5"); // true  (compara só o valor)
console.log(5 === "5"); // false (compara valor e tipo)

// ---------- Ternário ----------
function getPreco(verifica) {
  return verifica ? "R$ 100,00" : "R$ 200,00";
}
console.log(getPreco(true), getPreco(false), getPreco(null));

let idade = 37;
console.log(idade >= 21 ? "Vinho" : "Refrigerante");

let comprimenta = (pessoa) => {
  let nome = pessoa ? pessoa.nome : "Estranho";
  return `Olá ${nome}`; 
  // `${nome},  <=  isso é uma template string!`;
};
console.log(comprimenta({ nome: "Raphael" }), comprimenta());

let nota = 8.5;
let grau =
  nota >= 8 ? "A" : nota >= 7 ? "B" : nota >= 6 ? "C" : nota >= 5 ? "D" : "E";
console.log(`O seu grau no exame é ${grau}`);


for (var i = 0; i < 4; i++) {}
console.log("var i fora do loop:", i); 

let funcoesVar = [];
for (var k = 0; k < 3; k++) {
  funcoesVar[k] = function () {
    console.log("var:", k);
  };
}
funcoesVar.forEach((f) => f()); // 3, 3, 3

let funcoesLet = [];
for (let k = 0; k < 3; k++) {
  funcoesLet[k] = function () {
    console.log("let:", k);
  };
}
funcoesLet.forEach((f) => f()); // 0, 1, 2

// ---------- for ----------
let soma = 0;
for (let n = 0; n <= 9; n++, soma += n);
console.log("soma:", soma);

// ---------- Arrays e map ----------
const alunos = [
  { nome: "Raphael", nota: 7 },
  { nome: "Caroline", nota: 9 },
  { nome: "Gilson", nota: 5 },
  { nome: "Sara", nota: 8 },
  { nome: "Vinicius", nota: 6 },
];
console.log(alunos.map((aluno) => aluno.nome));

let somaNotas = 0;
for (let j = 0; j < alunos.length; j++) somaNotas += alunos[j].nota;
console.log("A média das notas é:", somaNotas / alunos.length);

// ---------- break e continue
let interacao = 0;
top: for (let i2 = 0; i2 < 6; i2++) {
  for (let j2 = 0; j2 < 6; j2++) {
    interacao++;
    if (i2 == 2 && j2 == 2) break top;
  }
}
console.log("interações até o break:", interacao);

let frase = "Usando continue no Javascript";
let contador = 0;
for (let i3 = 0; i3 < frase.length; i3++) {
  if (frase.charAt(i3) != "s") continue;
  contador++;
}
console.log("O numero de s encontrado na nossa string é: " + contador);

outer: for (let i4 = 0; i4 <= 5; i4++) {
  for (let j4 = 0; j4 <= 5; j4++) {
    if (i4 == 2 && j4 == 2) {
      console.log("continue outer");
      continue outer;
    }
    console.log(`[i: ${i4} e j: ${j4}]`);
  }
}

// ---------- switch: dias do mês ----------
var ano = 2023,
  mes = 2,
  contaDias;
switch (mes) {
  case 1:
  case 3:
  case 5:
  case 7:
  case 8:
  case 10:
  case 12:
    contaDias = 31;
    break;
  case 4:
  case 6:
  case 9:
  case 11:
    contaDias = 30;
    break;
  case 2:
    contaDias = (ano % 4 == 0 && !(ano % 100 == 0)) || ano % 400 == 0 ? 29 : 28;
    break;
  default:
    contaDias = "Mês inválido";
}
console.log("Dias no mês:", contaDias);

// ---------- switch: frutas ----------
let tipofruta = "Manga";
switch (tipofruta) {
  case "Laranja":
    console.log("O quilo da laranja está R$3,59.");
    break;
  case "Maçã":
    console.log("O quilo da maçã está R$1,32.");
    break;
  case "Banana":
    console.log("O quilo da banana está R$2,48.");
    break;
  case "Cereja":
    console.log("O quilo da cereja está R$3,00.");
    break;
  case "Manga":
    console.log("O quilo da manga está R$5,56.");
    break;
  case "Mamão":
    console.log("O quilo do mamão está R$4,23.");
    break;
  default:
    console.log(`Desculpe, não temos ${tipofruta}.`);
}

// ---------- while e do-while ----------
let valores = [];
let contagem = 0;
const tamanho = 5;
while (contagem < tamanho) {
  valores.push(Math.round(Math.random() * 10));
  contagem++;
}
console.log("vetor:", valores);

let c = 0;
do {
  c++;
  console.log("contador: " + c);
} while (c < 10);
