<?php 
require('ordenador.php');
require('conexion.php');

$id = $_GET['id'];
$stock = $_GET['stock'];

$resultado = $pdo->prepare('UPDATE ordenadores SET stock= ? WHERE id = ?');
$resultado->bindParam(1, $stock);
$resultado->bindParam(2, $id);

$resultado->execute();
?>