<?php 
require('ordenador.php');
require('conexion.php');

$nombre = $_GET['nombre'];
$procesador = $_GET['procesador'];
$ram = $_GET['ram'];
$stock = $_GET['stock'];
$precio = $_GET['precio'];

$pdoSt = $pdo->prepare('INSERT INTO ordenadores (nombre,procesador,ram,stock,precio) VALUES (?,?,?,?,?)');
$pdoSt->bindParam(1, $nombre);
$pdoSt->bindParam(2, $procesador);
$pdoSt->bindParam(3, $ram);
$pdoSt->bindParam(4, $stock);
$pdoSt->bindParam(5, $precio);
$pdoSt->execute();
print"Ordenador añadido a la base de datos";
?>