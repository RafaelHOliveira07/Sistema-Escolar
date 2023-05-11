<?php

// Inclui o arquivo quer contém a definição da classe turma
require_once "classes/Turma.php";
// Cria um novo objeto Turma
$turma = new Turma();

// Define as propriedades descTurma e ano do objeto Turma
// com os valores enviados pelo formulário
$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

// Chama o método inserir() no objeto Turma para inserir
//os danos da nova turma no banco de dados
$turma->inserir();

?>