<?php

// Inclui o arquivo quer contém a definição da classe turma
require_once "classes/Disciplina.php";
// Cria um novo objeto Turma
$disciplina = new Disciplina();

// Define as propriedades descTurma e ano do objeto Turma
// com os valores enviados pelo formulário
$disciplina->descDisci = $_POST['descDisci'];
$disciplina->cargaHora = $_POST['cargaHora'];

// Chama o método inserir() no objeto Turma para inserir
//os danos da nova turma no banco de dados
$disciplina->inserir();

?>