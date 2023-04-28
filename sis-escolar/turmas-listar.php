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
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Listar Turmas</h3>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Turma</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $linha): ?>
        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['descTurma'] ?></td>
            <td><?php echo $linha['ano'] ?></td>
            <td>
                <a href="turmas-editar.php?id=<?= $linha['id'] ?>">Atualizar</a>
                <a href="turmas-excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>