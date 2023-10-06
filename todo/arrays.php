<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php  
    $nombres= ["Paco","Alfonso","Eustaquio","Adrian","Patricio"];
    

    $longitud = count($nombres);
    print ("Hay ".$longitud." nombres en el array"."<br/>");

    $cadena=implode(",",$nombres);
    print ("El array convertido a String".$cadena."<br/>");

    $ordenados=$nombres;
    asort($ordenados);
    print ("El array ordenado alfabéticamente: ");
    print_r($ordenados);
    print ("<br/>");

    $reverse=$nombres;
    $reverse= array_reverse($reverse);
    print("El array en el orden inverso al que se creó: ");
    print_r($reverse);
    print ("<br/>");

    $posicion = array_search("Adrian",$nombres);
    print("Mi nombre esta en         la posición: ".$posicion);
    
    $alumnos = [
        ["id"=>1,"nombre"=> "Paquito","edad"=>17],
        ["id"=>2,"nombre"=> "Dani","edad"=>19],
        ["id"=>3,"nombre"=> "Carlos","edad"=>12],
    ];
    echo '<table border="1">';
    foreach ( $alumnos as $a ) {
        echo '<tr>';
        foreach ( $a as $b ) {
                echo '<td>'.$b.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    $nombrealumnos=array_column($alumnos,"nombre");
    print("El nombre de los alumnos: ");
    print_r($nombrealumnos);
    print ("<br/>");

    $numeros=[10,5,3,2,0,1,9,23];
    $resultado=array_sum($numeros);
    print("Array de numeros: ");
    print_r ($numeros);
    print ("<br/>");
    print ("La suma es: ".$resultado);
    s
    
    
    
    ?>
</body>
</html>