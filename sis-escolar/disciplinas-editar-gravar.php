<?php

// Inclui o arquivo que contém a definição da classe Diciplina
require_once 'classes/Disciplina.php';

// Cria um novo objeto Diciplina utilizando o id do objeto como referência
$id = $_POST['id'];
$disciplina = new Disciplina($id);
// Define as propriedades descDiciplina e ano do objeto Diciplina
$disciplina->descDisci = $_POST['descDisci'];
$disciplina->cargaHora = $_POST['cargaHora'];

// Chama o método atualizar() no objeto Diciplina
$disciplina->atualizar();
// Redireciona o usuário para a página "dici$diciplinas-listar.php"
header('Location: disciplinas-listar.php');

?>