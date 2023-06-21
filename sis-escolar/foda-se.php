<?php

require_once 'usuario-verifica.php';

$usuario = $_SESSION['usuario_logado'];
$usuario_id = $_SESSION['id_logado'];

echo $usuario;
echo $usuario_id;

?>

