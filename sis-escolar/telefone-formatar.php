<?php

// Inclui o arquivo que contém a definição de classe Aluno 
require_once "classes/Aluno.php";

// Obtém o valor do parâmetro "id" da URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto da classe Aluno
$aluno = new Aluno($id);

?>