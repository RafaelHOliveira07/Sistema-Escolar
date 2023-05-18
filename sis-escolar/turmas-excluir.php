<?php

// Inclui o arquivo que contém a definição da classe Turma
require_once 'classes/Turma.php';

// Obtém o valor do parâmetro "id" de URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto Turma
$turma = new Turma($id);

// Chama o métedo "excluir" do objeto Turma
$turma->excluir();

// Redireciona o usuário para a página "turmas-listar.php"
header('Location: turmas-listar.php');

?>