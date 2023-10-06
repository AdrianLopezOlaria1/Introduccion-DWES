<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort 2</title>
</head>
<body>
    <?php 
    $registro = "5 1 -1 3 8 16 18 20 29 23";
    $temperaturas = explode(" ",$registro);
    $longitud = count($temperaturas);
    $suma = 0;
    $minimas = [];
    $maximas = [];

    print("Las temperaturas registradas son:<br/>");

    for ($i=0; $i <$longitud; $i++) { 
        $suma += $temperaturas[$i];
        if($i <5){
            if($i==0){
            print('Temperaturas mínimas: <br/>');
            print($temperaturas[$i].'<br/>');
            }
        print($temperaturas[$i].'<br/>');
        }else{
            if($i == 5){
            print('Temperaturas máximas: <br/>');
            print($temperaturas[$i].'<br/>');
            }
            print($temperaturas[$i].'<br/>');
        }
    }
    $media = $suma / $longitud;
    print("La media de temperatura es: ".$media);


    
    

    ?>
</body>
</html>