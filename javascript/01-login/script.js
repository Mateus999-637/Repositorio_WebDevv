//esse aq e um exemplo de login (somente exemplo, nao e seguro)
function fazerLogin() {
  const username = document.getElementById("usuario").value;
  const password = document.getElementById("senha").value;
  const resultado = document.getElementById("resultado");

  if (username === "usuario" && password === "senha") {
    console.log("Login bem-sucedido!");
    resultado.innerHTML = "Login bem-sucedido!";
    window.location.href = "bemvindo.html";
  } else {
    console.log("Credenciais incorretas, tente novamente.");
    resultado.innerHTML = "Credenciais incorretas, tente novamente.";
    window.location.href = "erro.html";
  }
}
