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
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Listar Alunos</h3>
    <table border="1">
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
        </tr>
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
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>