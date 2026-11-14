document.querySelectorAll(".form-excluir").forEach((formulario) => {
  formulario.addEventListener("submit", (evento) => {
    if (!window.confirm("Deseja realmente excluir este jogo?")) {
      evento.preventDefault();
    }
  });
});
