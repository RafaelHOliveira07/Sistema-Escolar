<?php

require_once 'usuario-verifica.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrado com Sucesso</title>
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
</head>
<body class="text-center flex-column">
    <h1 lass="font-weight-bold text-dark">Aluno registrado com sucesso</h1>
    <div class="mt-3">
        <a href="../sis-escolar/alunos-listar.php" class="btn btn-lg btn-dark btn-lg px-5">Voltar</a>
        <a href="../sis-escolar/alunos-inserir.php" class="btn btn-lg btn-dark btn-lg px-4">Novo Aluno</a>
    </div>
</body>
</html>