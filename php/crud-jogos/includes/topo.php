<?php $titulo = $titulo ?? "Cadastro de jogos"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"); ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="topo">
    <h1>Cadastro de jogos</h1>
    <p>PHP + MySQL + PDO</p>
  </header>
  <main class="container">
