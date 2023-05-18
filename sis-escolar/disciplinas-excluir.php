<?php

// Inclui o arquivo que contém a definição da classe Diciplina
require_once 'classes/Disciplina.php';

// Obtém o valor do parâmetro "id" de URL e armazena em variável
$id = $_GET['id'];

// Cria um novo objeto Diciplina
$disciplina = new Disciplina($id);

// Chama o métedo "excluir" do objeto Diciplina
$disciplina->excluir();

// Redireciona o usuário para a página "diciplinas-listar.php"
header('Location: disciplinas-listar.php');

?>