// JavaScript do lado do cliente: monta o formulário, mostra a média ao vivo
// e valida antes de enviar. O PHP valida de novo no servidor.

const lista = document.getElementById("lista-alunos");
const form = document.getElementById("form-boletim");
const msgErro = document.getElementById("msg-erro");
const btnAdd = document.getElementById("btn-add");
const LIMITE_ALUNOS = 100;

function criarLinha() {
  const linha = document.createElement("div");
  linha.className = "linha-aluno";
  linha.innerHTML = `
    <input type="text" name="nome[]" placeholder="Nome do aluno" maxlength="100" required>
    <input type="number" name="p1[]" placeholder="P1" min="0" max="10" step="0.1" required>
    <input type="number" name="p2[]" placeholder="P2" min="0" max="10" step="0.1" required>
    <span class="media-ao-vivo">Média: --</span>
    <button type="button" class="btn-remover" title="Remover aluno">&times;</button>
  `;

  const [nome, p1, p2] = linha.querySelectorAll("input");
  const media = linha.querySelector(".media-ao-vivo");

  function atualizarMedia() {
    if (p1.value !== "" && p2.value !== "") {
      const m = (parseFloat(p1.value) + parseFloat(p2.value)) / 2;
      media.textContent = "Média: " + m.toFixed(2);
    } else {
      media.textContent = "Média: --";
    }
  }
  p1.addEventListener("input", atualizarMedia);
  p2.addEventListener("input", atualizarMedia);

  linha.querySelector(".btn-remover").addEventListener("click", () => {
    if (lista.children.length > 1) {
      linha.remove();
      msgErro.textContent = "";
    }
  });

  lista.appendChild(linha);
  nome.focus();
}

btnAdd.addEventListener("click", () => {
  if (lista.children.length >= LIMITE_ALUNOS) {
    msgErro.textContent = `O limite é de ${LIMITE_ALUNOS} alunos por envio.`;
    return;
  }
  msgErro.textContent = "";
  criarLinha();
});

form.addEventListener("submit", (event) => {
  msgErro.textContent = "";
  const linhas = lista.querySelectorAll(".linha-aluno");

  for (let i = 0; i < linhas.length; i++) {
    const [nome, p1, p2] = linhas[i].querySelectorAll("input");
    const n1 = parseFloat(p1.value);
    const n2 = parseFloat(p2.value);

    if (nome.value.trim() === "") {
      msgErro.textContent = `Aluno ${i + 1}: informe o nome.`;
      event.preventDefault();
      return;
    }
    if (isNaN(n1) || isNaN(n2) || n1 < 0 || n1 > 10 || n2 < 0 || n2 > 10) {
      msgErro.textContent = `Aluno ${i + 1}: as notas devem estar entre 0 e 10.`;
      event.preventDefault();
      return;
    }
  }
});

criarLinha(); // começa com uma linha pronta
