<?php

require_once 'usuario-verifica.php';

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Gerenciar Turmas</title>
  <!-- Principal CSS do Bootstrap -->
  <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos customizados para esse template -->
  <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">

  <link rel="stylesheet" href="voltar.css">
</head>

<body class="text-center flex-column">
  <h1 class="font-weight-bold text-dark mb-3">Sistema Escolar</h1>
  <h3 class="h3 mb-3 font-weight-normal mb-5">Gerenciar Turmas</h3>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link btn-dark mb-3" href="../sis-escolar/turmas-inserir.php">Adicionar Turmaa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-dark mb-3" href="../sis-escolar/turmas-listar.php">Listar Turmas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-dark" href="../sis-escolar/home.php">Voltar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-dark sair" href="../sis-escolar/usuario-logout.php">Logout</a>
    </li>
  </ul>
</body>

</html>