<?php

require_once 'usuario-verifica.php';

?>

<?php

// Inclui o arquivo que contém a definição de classe Aluno 
require_once "classes/Aluno.php";

// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto da classe Aluno
$aluno = new Aluno($id);

require_once "classes/Turma.php";

$turma = new Turma();

$lista = $turma->listar();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Turma</title>
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">

    <link rel="stylesheet" href="voltar.css">
</head>
<body class="text-center flex-column">
    <h1 class="font-weight-bold text-dark">Sistema Acadêmico</h1>
    <h3 class="h3 mb-3 font-weight-normal">Editar Aluno</h3>
    <div class="container">
        <form action="alunos-editar-gravar.php" method="post">
            <input type="hidden" name="id" value="<?= $aluno->id ?>">
            <div class="row">
                <div class="form-group col-9">
                    <label class="sr-only" for="nome">Nome:</label>
                    <input class="form-control form-control-lg" type="text" name="nome" value="<?php echo $aluno->nome ?>">
                </div>
                
                <div class="form-group col-3">
                    <label class="sr-only" for="dataNasc">Data de Nascimento:</label>
                    <input class="form-control form-control-lg" type="date" name="dataNasc" value="<?= $aluno->dataNasc ?>">
                </div> 
            </div>
            
            <div class="row">
                <div class="form-group col-9">
                    <label class="sr-only" for="email">E-mail:</label>
                    <input class="form-control form-control-lg" type="email" name="email" value="<?= $aluno->email ?>">
                </div>
                
                <div class="form-group col-3">
                    <label class="sr-only" for="tel">Telefone:</label>
                    <input class="form-control form-control-lg" type="tel" name="tel" value="<?= $aluno->tel ?>">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-2">
                    <label class="sr-only" for="cep">CEP:</label>
                    <input class="form-control form-control-lg" type="text" name="cep" value="<?= $aluno->cep ?>">
                </div>
                
                <div class="form-group col-8">
                    <label class="sr-only" for="endereco">Endereço:</label>
                    <input class="form-control form-control-lg" type="text" name="endereco" value="<?= $aluno->endereco ?>">
                </div>
                
                <div class="form-group col-2">
                    <label class="sr-only" for="nCasa">Número:</label>
                    <input class="form-control form-control-lg" type="text" name="nCasa" value="<?= $aluno->nCasa ?>">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-5">
                    <label class="sr-only" for="bairro">Bairro:</label>
                    <input class="form-control form-control-lg" type="text" name="bairro" value="<?= $aluno->bairro ?>">
                </div>
                
                <div class="form-group col-5">
                    <label class="sr-only" for="cidade">Cidade:</label>
                    <input class="form-control form-control-lg" type="text" name="cidade" value="<?= $aluno->cidade ?>">
                </div>
                
                <div class="form-group col-2">
                    <label class="sr-only" for="estado">Estado:</label>
                    <input class="form-control form-control-lg" type="text" name="estado" value="<?= $aluno->estado ?>">
                </div>
            </div>

            <div class="row mb-4">
                <div class="form-group col-6">
                    <label class="sr-only" for="turma">Turma:</label>
                    <select class="form-control form-control-lg" name="turma">
                        <option value="<?= $aluno->turma_id ?>"></option>
                        <?php
                            foreach ($lista as $linha):
                                echo "<option value='{$linha['id']}'>
                                                     {$linha['descTurma']}
                                     </option>";
                            endforeach
                        ?>
                    </select>
                </div>

                <div class="form-group form-check col-3 mt-3">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="genero" id="genero0" value="0" <?php echo ($aluno->genero == "0") ? "checked" : null; ?>>
                        <label class="custom-control-label" for="genero0">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="genero" id="genero1" value="1" <?php echo ($aluno->genero == "1") ? "checked" : null; ?>>
                        <label class="custom-control-label text-lg" for="genero1">Feminino</label>
                    </div>
                </div>

                <div class="form-group form-check col-1 mt-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="statusMat" id="statusMat" <?php echo ($aluno->statusMat == "on") ? "checked" : null; ?>>
                        <label class="custom-control-label" for="statusMat">Matrícula</label>
                    </div>
                </div> 
            </div>
                
            
            <!--<div class="row mb-4">
                <div class="form-group col-4">
                    <label class="sr-only" for="turma">Turma:</label>
                    <input class="form-control form-control-lg" type="text" name="turma" value="<">
                </div>

                <div class="form-group col-4">
                    <label class="sr-only" for="genero">Genêro:</label>
                    <input class="form-control form-control-lg" type="text" name="genero" value="">
                </div>
                
                <div class="form-group col-4">
                    <label class="sr-only" for="statusMat">Matrícula:</label>
                    <input class="form-control form-control-lg" type="text" name="statusMat" value="">
                </div>
            </div>-->
            
            
            <a href="../sis-escolar/alunos-listar.php" class="btn btn-lg btn-dark btn-lg px-5">Voltar</a>
            <button class="btn btn-lg btn-dark btn-lg px-5" type="submit">Gravar</button>

            <a class="btn btn-dark sair" href="../sis-escolar/usuario-logout.php">Logout</a>
            
            <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
        </form>
    </div>
    
</body>
</html>