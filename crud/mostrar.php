<?php 
require('ordenador.php');
require('conexion.php');

$id = $_GET['id'];


$resultado = $pdo->prepare('SELECT * FROM ordenadores WHERE ?');
$resultado->bindParam(1, $id);
$resultado->execute();

print "Mostrando el ordenador con id ".$id;

while($ordenador=$resultado->fetch()){
    print "ID: ".$ordenador['id']."<br>";
    print "Nombre: ".$ordenador['nombre']."<br>";
    print "Procesador: ".$ordenador['procesador']."<br>";
    print "RAM: ".$ordenador['ram']."GB <br>";
    print "Stock: ".$ordenador['stock']."<br>";
    print "Precio: ".$ordenador['precio']."€ <br>";
}
?>