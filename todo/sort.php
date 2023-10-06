<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort</title>
</head>
<body>
    <?php 
    $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
    
    print('Array original');
    print_r($edades);
    print('<br/>');

    ksort($edades);
    print ('Ordenado por el nombre Ascendente: ');
    print_r($edades);
    print('<br/>');

    asort($edades);
    print ('Ordenado por la edad Ascendente: ');
    print_r($edades);
    print('<br/>');

    krsort($edades);
    print ('Ordenado por el nombre Descendente: ');
    print_r($edades);
    print('<br/>');

    arsort($edades);
    print ('Ordenado por la edad Descendente: ');
    print_r($edades);
    print('<br/>');
    
    ?>
</body>
</html>