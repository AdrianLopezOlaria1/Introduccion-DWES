<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort 3</title>
</head>
<body>
    <?php 
    $palabras=[
        "Móvil"=>"Un dispositivo electrónico que se utiliza para realizar llamadas, enviar mensajes, navegar por Internet y otras tareas.",
        "Ordenador portátil"=>" Un dispositivo electrónico que se puede transportar fácilmente y que se utiliza para realizar tareas como trabajar, estudiar y jugar.",
        "Coche"=>"Un vehículo motorizado que se utiliza para el transporte de personas o mercancías."
    ];
    
    function compararLongitud($a,$b){
        $longitudA = strlen($a);
        $longitudB = strlen($b);
        if($longitudA<$longitudB){
            return 1;
        }else{
            return -1;
        }
            

    }

    uasort($palabras,'compararLongitud');
    print_r($palabras)

    ?>
    
</body>
</html>