<?php

require_once 'usuario-verifica.php';

?>

<?php

// Inclui o arquivo que contém a definição de classe Diciplina 
require_once "classes/Disciplina.php";

// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto da classe Diciplina
$disciplina = new Disciplina($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Diciplina</title>
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9869816a76.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="voltar.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Nova Diciplina</h3>
    <form action="disciplinas-editar-gravar.php" method="post">
        <input type="hidden" name="id" value="<?= $disciplina->id ?>">
        <div class="form-group">
            <label class="sr-only" for="descDisci">Disciplina:</label>
            <input class="form-control form-control-lg" type="text" name="descDisci" value="<?php echo $disciplina->descDisci ?>">
        </div>
        
        <div class="form-group">
            <label class="sr-only" for="cargaHora">Carga Horária:</label>
            <input class="form-control form-control-lg" type="number" name="cargaHora" value="<?= $disciplina->cargaHora ?>">
        </div>
        
        <a href="../sis-escolar/Disciplinas-listar.php" class="btn btn-lg btn-dark btn-lg px-5">Voltar</a>
        <button class="btn btn-lg btn-dark btn-lg px-5" type="submit">Gravar</button>

        <a class="btn btn-dark sair font-weight-bold" href="../sis-escolar/usuario-logout.php">Sair <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</body>
</html>