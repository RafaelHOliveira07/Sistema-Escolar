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
  <title>Sistema Escolar</title>
  <!-- Principal CSS do Bootstrap -->
  <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos customizados para esse template -->
  <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="voltar.css">
</head>

<body class="text-center flex-column">
  <h1 class="font-weight-bold text-dark mb-5">Sistema Escolar</h1>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link btn-dark mb-3" href="../sis-escolar/alunos-listar.php">Gerenciar Alunos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-dark mb-3" href="../sis-escolar/turmas-listar.php">Gerenciar Turmas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-dark" href="../sis-escolar/disciplinas-listar.php">Gerenciar Diciplinas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn-dark sair font-weight-bold" href="../sis-escolar/usuario-logout.php">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </li>
  </ul>
</body>

</html>