<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback</title>
</head>
<body>
    <?php 
    $frutas=["Plátano","Manzana","Paraguayo","Pera","Naranja"];
    
    print("El array: <br/>");
    print_r($frutas);
    print("<br/>");
    function calcularLongitud($fruta){
        return strlen($fruta);
    }
    
    $longitudes = array_map("calcularLongitud",$frutas);

    $largo=max($longitudes);
    $corta=min($longitudes);
    
    print("La fruta con el nombre más corto tiene ".$largo." carácteres <br/>");
    print("La fruta con el nombre más corto tiene ".$corta." carácteres <br/>");

    
    ?>
</body>
</html>