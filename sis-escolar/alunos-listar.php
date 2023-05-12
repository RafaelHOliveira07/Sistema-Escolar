<?php

require_once 'usuario-verifica.php';

?>

<?php

// Inclui o arquivo que contém a classe Aluno
require_once "classes/Aluno.php";

// Cria um novo objeto Aluno
$aluno = new Aluno();

// Chama o método "listar" e armazena o resultado em uma variável
$lista = $aluno->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="voltar.css">
    <link rel="stylesheet" href="lista.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Lista de Alunos</h3>
    <div class="table-responsive tabela">
        <table class="table table-bordered table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Nº</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Gênero</th>
                <th>Turma</th>
                <th>Status da Matrícula</th>
                <th>Ações</th>
            </tr>
        </thead>
            <?php foreach ($lista as $linha): ?>
            <tr class="text-nowrap">
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php $datetime = new DateTime($linha['dataNasc']); echo $datetime->format('d/m/Y') ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['tel'] ?></td>
            <td><?php echo $linha['cep'] ?></td>
            <td><?php echo $linha['endereco'] ?></td>
            <td><?php echo $linha['nCasa'] ?></td>
            <td><?php echo $linha['bairro'] ?></td>
            <td><?php echo $linha['cidade'] ?></td>
            <td><?php echo $linha['estado'] ?></td>
            <td><?php echo ($linha['genero'] == "0") ? "Masculino" : "Feminino";$genero ?></td>
            <td><?php echo $linha['descTurma'] ?></td>
            <td><?php echo ($linha['statusMat'] == "on") ? "Ativa" : "Inativa"; ?></td>
            <td>
                <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Editar" href="alunos-editar.php?id=<?= $linha['id'] ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                <a class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Excluir" href="alunos-excluir.php?id=<?= $linha['id'] ?>"><i class="fa-solid fa-xmark"></i></a>
            </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>

    <a href="../sis-escolar/alunos-gerenciar.php" class="btn btn-dark voltar">Voltar</a>

    <a class="btn btn-dark sair" href="../sis-escolar/usuario-logout.php">Logout</a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>