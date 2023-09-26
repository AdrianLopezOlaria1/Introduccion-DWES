<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
    <?php 
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    $nombre = substr($_SERVER['HTTP_USER_AGENT'],0,7);
    
    if($nombre=="Mozilla"){
        print"<h1>Bienvenido a mi pagina</h1>";
        print "Estas usando ".$nombre;
    }else{
        print"Instalate el Mozilla para visualizar esta pagina";
    }
    
    ?>
</body>
</html>