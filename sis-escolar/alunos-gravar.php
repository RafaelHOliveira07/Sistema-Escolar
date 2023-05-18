<?php

// Inclui o arquivo quer contém a definição da classe turma
require_once "classes/Aluno.php";
// Cria um novo objeto Turma
$aluno = new Aluno();

$telefone = $_POST['tel'];

$telefone="(".substr($telefone,0,2).") ".substr($telefone,2,-4)."-".substr($telefone,-4);

$cep = $_POST['cep'];

$cep = substr($cep,0,5)."-".substr($cep,5,7);
// Define as propriedades descTurma e ano do objeto Turma
// com os valores enviados pelo formulário
if(isset($_POST['statusMat']))
{
    $aluno->nome = $_POST['nome'];
    $aluno->dataNasc = $_POST['dataNasc'];
    $aluno->email = $_POST['email'];
    $aluno->tel = $telefone;
    $aluno->cep = $cep;
    $aluno->endereco = $_POST['endereco'];
    $aluno->nCasa = $_POST['nCasa'];
    $aluno->bairro = $_POST['bairro'];
    $aluno->cidade = $_POST['cidade'];
    $aluno->estado = $_POST['estado'];
    $aluno->genero = $_POST['genero'];
    $aluno->turma_id = $_POST['turma_id'];
    $aluno->statusMat = $_POST['statusMat'];

    // Chama o método inserir() no objeto Turma para inserir
    //os danos da nova turma no banco de dados
    $aluno->inserir();
}
else
{
    $aluno->nome = $_POST['nome'];
    $aluno->dataNasc = $_POST['dataNasc'];
    $aluno->email = $_POST['email'];
    $aluno->tel = $telefone;
    $aluno->cep = $cep;
    $aluno->endereco = $_POST['endereco'];
    $aluno->nCasa = $_POST['nCasa'];
    $aluno->bairro = $_POST['bairro'];
    $aluno->cidade = $_POST['cidade'];
    $aluno->estado = $_POST['estado'];
    $aluno->genero = $_POST['genero'];
    $aluno->turma_id = $_POST['turma_id'];

    // Chama o método inserir() no objeto Turma para inserir
    //os danos da nova turma no banco de dados
    $aluno->inserir();
}

?>