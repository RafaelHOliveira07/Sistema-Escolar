<?php

// Inclui o arquivo que contém a definição da classe Aluno
require_once 'classes/Aluno.php';

// Obtém o valor do parâmetro "id" de URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto Aluno
$aluno = new Aluno($id);

// Chama o métedo "excluir" do objeto Aluno
$aluno->excluir();

// Redireciona o usuário para a página "aluno$alunos-listar.php"
header('Location: alunos-listar.php');

?>