<?php

// Inclui o arquivo que contém a definição da classe Aluno
require_once 'classes/Aluno.php';

// Cria um novo objeto Aluno utilizando o id do objeto como referência
$id = $_POST['id'];
$aluno = new Aluno($id);
// Define as propriedades descDiciplina e ano do objeto Aluno
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

// Chama o método atualizar() no objeto Aluno
$aluno->atualizar();
// Redireciona o usuário para a página "alunos-listar.php"
header('Location: alunos-listar.php');

?>