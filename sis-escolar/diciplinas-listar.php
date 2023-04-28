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
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Listar Diciplinas</h3>
    <div class="table-responsive">
        <table class="table table-hover" border="1">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Turma</th>
                <th>Ano</th>
                <th>Ações</th>
            </tr>
        </thead>
        
        <?php foreach ($lista as $linha): ?>
        <tbody>
            <tr>
                <td><?php echo $linha['id'] ?></td>
                <td><?php echo $linha['descDici'] ?></td>
                <td><?php echo $linha['cargaHora'] ?> horas</td>
                <td>
                    <a href="diciplinas-editar.php?id=<?= $linha['id'] ?>">Atualizar</a>
                    <a href="diciplinas-excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
        </tbody>
        
        <?php endforeach ?>
    </table>
    </div>
    
</body>
</html>