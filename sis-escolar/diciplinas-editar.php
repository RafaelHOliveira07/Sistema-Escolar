<?php

// Inclui o arquivo que contém a definição de classe Diciplina 
require_once "classes/Diciplina.php";

// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto da classe Diciplina
$diciplina = new Diciplina($id);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Nova Turma</h3>
    <form action="diciplinas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $diciplina->id ?>">
        <label for="descDici">di$diciplina:</label>
        <input type="text" name="descDici" value="<?php echo $diciplina->descDici ?>">
        <br><br>
        <label for="cargaHora">Carga Horária:</label>
        <input type="number" name="cargaHora" value="<?= $diciplina->cargaHora ?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>