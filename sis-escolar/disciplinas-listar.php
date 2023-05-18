<?php

require_once 'usuario-verifica.php';

?>

<?php

// Inclui o arquivo que contém a classe Turma
require_once "classes/Disciplina.php";

// Cria um novo objeto Turma
$disciplina = new Disciplina();

// Chama o método "listar" e armazena o resultado em uma variável
$lista = $disciplina->listar();

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
    <script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="lista.css">
    <link rel="stylesheet" href="voltar.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Lista de Disciplinas</h3>
    <div class="table-responsive tabela">
        <table class="table table-bordered table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Disciplinas</th>
                <th>Ano</th>
                <th>Ações</th>
            </tr>
        </thead>
        
        <?php foreach ($lista as $linha): ?>
        <tbody>
            <tr class="text-nowrap">
                <td><?php echo $linha['id'] ?></td>
                <td><?php echo $linha['descDisci'] ?></td>
                <td><?php echo $linha['cargaHora'] ?> horas</td>
                <td>
                    <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="disciplinas-editar.php?id=<?= $linha['id'] ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Excluir" href="disciplinas-excluir.php?id=<?= $linha['id'] ?>"><i class="fa-solid fa-xmark"></i></a>
                </td>
            </tr>
        </tbody>
        
        <?php endforeach ?>
    </table>
    </div>
    <div class="mt-3">
        <a href="../sis-escolar/disciplinas-inserir.php" class="btn btn-lg btn-dark btn-lg px-5">Nova Disciplina</a>
    </div>
    
    <a href="../sis-escolar/home.php" class="btn btn-dark voltar">Voltar</a>

    <a class="btn btn-dark sair font-weight-bold" href="../sis-escolar/usuario-logout.php">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    
</body>
</html>