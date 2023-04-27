<?php

// Inclui o arquivo quer contém a definição da classe turma
require_once "classes/Diciplina.php";
// Cria um novo objeto Turma
$diciplina = new Diciplina();

// Define as propriedades descTurma e ano do objeto Turma
// com os valores enviados pelo formulário
$diciplina->descDici = $_POST['descDiciplina'];
$diciplina->cargaHora = $_POST['cargaHora'];

// Chama o método inserir() no objeto Turma para inserir
//os danos da nova turma no banco de dados
$diciplina->inserir();

?>
