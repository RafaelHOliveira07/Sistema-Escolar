<?php

// Inclui o arquivo que contém a classe Turma
require_once "classes/Diciplina.php";

// Cria um novo objeto Turma
$diciplina = new Diciplina();

// Chama o método "listar" e armazena o resultado em uma variável
$lista = $diciplina->listar();

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
    <h3>Listar Diciplinas</h3>
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
            <td><?php echo $linha['descDici'] ?></td>
            <td><?php echo $linha['cargaHora'] ?> horas</td>
            <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>