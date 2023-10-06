<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    <?php 
    $productos=[
        "1" => "Iphone X",
        "2" => "Iphone XI",
        "3" => "Iphone XII"
    ];
    $producto = $_GET['id'];
    if(isset($producto)&& isset($productos[$producto])){
        print $productos[$producto];
    }else{
        http_response_code(404); 
    echo "Producto no encontrado";
    }

    
    

    ?>
</body>
</html>