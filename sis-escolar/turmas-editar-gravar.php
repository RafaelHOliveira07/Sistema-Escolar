<?php

// Inclui o arquivo que contém a definição da classe Turma
require_once 'classes/Turma.php';

// Cria um novo objeto Turma utilizando o id do objeto como referência
$id = $_POST['turma_id'];
$turma = new Turma($id);
// Define as propriedades descTurma e ano do objeto Turma
$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

// Chama o método atualizar() no objeto Turma
$turma->atualizar();
// Redireciona o usuário para a página "turmas-listar.php"
header('Location: turmas-listar.php');

?>