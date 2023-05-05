<?php

require_once 'usuario-verifica.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Turma</title>
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">

    <link rel="stylesheet" href="voltar.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Nova turma</h3>
    <form action="turmas-gravar.php" method="post">
        <div class="form-group">
            <label class="sr-only" for="descTurma">Turma:</label>
            <input class="form-control form-control-lg" type="text" name="descTurma" placeholder="Turma">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="ano">Ano:</label>
            <input class="form-control form-control-lg" type="number" name="ano" placeholder="Ano">
        </div>
        
        <a href="../sis-escolar/turmas-gerenciar.php" class="btn btn-lg btn-dark btn-lg px-5">Voltar</a>
        <button class="btn btn-lg btn-dark btn-lg px-5" type="submit">Gravar</button>

        <a class="btn btn-dark sair" href="../sis-escolar/usuario-logout.php">Logout</a>
        
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</body>
</html>