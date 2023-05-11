<?php

require_once 'usuario-verifica.php';

?>

<?php

// Inclui o arquivo que contém a classe Turma
require_once "classes/Turma.php";

// Cria um novo objeto Turma
$turma = new Turma();

// Chama o método "listar" e armazena o resultado em uma variável
$lista = $turma->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="lista.css">
    <link rel="stylesheet" href="voltar.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Lista de Turmas</h3>
    <div class="table-responsive tabela">
        <table class="table table-sm table-hover" border="1">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Turma</th>
                <th>Ano</th>
                <th>Ações</th>
            </tr>
        </thead>
            <?php foreach ($lista as $linha): ?>
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td><?php echo $linha['descTurma'] ?></td>
                <td><?php echo $linha['ano'] ?></td>
                <td>
                    <a class="btn btn-dark btn-sm" href="turmas-editar.php?id=<?= $linha['id'] ?>">Atualizar</a>
                    <a class="btn btn-dark btn-sm" href="turmas-excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>

    <a href="../sis-escolar/turmas-gerenciar.php" class="btn btn-dark
    voltar">Voltar</a>

    <a class="btn btn-dark sair" href="../sis-escolar/usuario-logout.php">Logout</a>
</body>
</html>