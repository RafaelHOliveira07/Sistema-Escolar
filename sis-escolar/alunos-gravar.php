<?php

// Inclui o arquivo quer contém a definição da classe turma
require_once "classes/Aluno.php";
// Cria um novo objeto Turma
$aluno = new Aluno();
// Define as propriedades descTurma e ano do objeto Turma
// com os valores enviados pelo formulário
$aluno->nome = $_POST['nome'];
$aluno->dataNasc = $_POST['dataNasc'];
$aluno->email = $_POST['email'];
$aluno->tel = $_POST['tel'];
$aluno->cep = $_POST['cep'];
$aluno->endereco = $_POST['endereco'];
$aluno->nCasa = $_POST['nCasa'];
$aluno->bairro = $_POST['bairro'];
$aluno->cidade = $_POST['cidade'];
$aluno->estado = $_POST['estado'];
$aluno->genero = $_POST['genero'];
$aluno->turma = $_POST['turma'];
$aluno->statusMat = $_POST['statusMat'];

// Chama o método inserir() no objeto Turma para inserir
//os danos da nova turma no banco de dados
$aluno->inserir();

?>