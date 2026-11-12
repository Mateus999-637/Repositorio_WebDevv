function publicarTabela() {
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  const erro = document.getElementById('erro');

  erro.innerHTML = (!nome || !email) ? 'Nome e email é requerido.' : '';

  if (nome && email) {
    const corpo = document.getElementById('corpo-tabela');
    const tr = document.createElement('tr');
    const tdNome = document.createElement('td');
    const tdEmail = document.createElement('td');

    tdNome.textContent = nome;
    tdEmail.textContent = email;

    tr.appendChild(tdNome);
    tr.appendChild(tdEmail);
    corpo.appendChild(tr);

    document.getElementById('nome').value = '';
    document.getElementById('email').value = '';
  }
}
