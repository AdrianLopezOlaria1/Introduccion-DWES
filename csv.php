<?php 
$productos=[
    "1"=>"Producto 1",
    "2"=>"Producto 2",
    "3"=>"Producto 3",
    "4"=>"Producto 4"
    
];

$archivo = "productos.php";

header("Content-Type: text/csv");
header("Content-Disposition: attachmend; filename=productos.php");

foreach($productos as $producto => $precio){
    echo($producto.";".$precio.";"."\n");
}
?>