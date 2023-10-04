<?php 
require('ordenador.php');
require('conexion.php');

$id = $_GET['id'];

$resultado = $pdo->prepare('DELETE FROM ordenadores WHERE id = ?');
$resultado->bindParam(1, $id);

$resultado->execute();
print "Has borrado el ordenador con id ".$id;

?>