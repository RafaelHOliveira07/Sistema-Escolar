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
    <link rel="stylesheet" href="voltar.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Lista de Alunos</h3>
    <div class="table-responsive tabela">
        <table class="table table-sm table-hover" border="1">
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
                <th>Statudos da Matrícula</th>
                <th>Ações</th>
            </tr>
        </thead>
            <?php foreach ($lista as $linha): ?>
            <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['dataNasc'] ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['tel'] ?></td>
            <td><?php echo $linha['cep'] ?></td>
            <td><?php echo $linha['endereco'] ?></td>
            <td><?php echo $linha['nCasa'] ?></td>
            <td><?php echo $linha['bairro'] ?></td>
            <td><?php echo $linha['cidade'] ?></td>
            <td><?php echo $linha['estado'] ?></td>
            <td><?php echo $linha['genero'] ?></td>
            <td><?php echo $linha['turma'] ?></td>
            <td><?php echo $linha['statusMat'] ?></td>
            <td>
                <a class="btn btn-dark btn-sm" href="alunos-editar.php?id=<?= $linha['id'] ?>">Atualizar</a>
                <a class="btn btn-dark btn-sm" href="alunos-excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
            </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>

    <a href="../sis-escolar/alunos-gerenciar.php" class="btn btn-dark voltar">Voltar</a>

    <a class="btn btn-dark sair" href="../sis-escolar/usuario-logout.php">Logout</a>
</body>
</html>