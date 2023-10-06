<?php 
    $title = "Multiplicar"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <?php 
    $primerValor = 1;

    if(isset($_GET['x']))
    $primerValor = $_GET['x']? $_GET['x'] : 1;

    $segundoValor = $_GET['y'] ?? 1 ;

    echo "El resultado es " . $primerValor * $segundoValor;
    ?>
</body>
</html>