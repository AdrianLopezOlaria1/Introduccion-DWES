<?php 
$titulo= "Cadenas"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
</head>
<body>
    <?php 

    $nombre=$_GET['nombre'] ?? "Adrian";
    $prefijo=$_GET['prefijo']?? null;
    $letraA = "a";
    $letrao=["o","O"];
    $url = "http://username:password@hostname:9090/path?arg=value";
   

    $nombre = trim($nombre);
    $longitud = strlen($nombre);
    $mayusculas = strtoupper($nombre);
    $minusculas = strtolower($nombre);
    $pre = strpos($nombre, $prefijo);
    $contiene = substr_count(strtolower($nombre),$letraA);
    $primeraA = stripos(strtolower($nombre),$letraA);
    $nombre0 = str_ireplace($letrao,0,$nombre);
    $protocolo = parse_url($url, PHP_URL_SCHEME);
    $username = parse_url($url, PHP_URL_USER);
    $path = parse_url($url, PHP_URL_PATH);
    $query = parse_url($url, PHP_URL_QUERY);

    print $nombre . "<br/>";
    print "Longitud: " . $longitud . "<br/>";
    print "Tu nombre en mayúsculas es: " . $mayusculas . "<br/>";
    print "Tu nombre en minusculas es: " . $minusculas . "<br/>";
    if(isset($prefijo)){
    if($pre === false){
        print "El nombre " . $nombre . " no contiene el prefijo " . $prefijo. "<br/>";
    } else {
        print "El nombre " . $nombre . " contiene el prefijo " . $prefijo . " y se encuentra en la posicion " . $pre . "<br/>";
    }
}   
    if($contiene > 0){
        print "Contiene ".  $contiene. " veces la letra A ". "<br/>";
    }else{
        print "No contiene la letra A". "<br/>";
    }
    print "La primera a aparecen en la posición " . $primeraA. "<br/>";
    print "Tu nombre cambiando las o por los 0 es:". $nombre0. "<br/>";
    print "Analicemos esta url: ". $url."<br/>";
    print "EL protocolo utilizado es: " .$protocolo."<br/>";
    print "El nombre de ususario es: " . $username."<br/>";
    print "El path de la url es: " . $path."<br/>";
    print "El querystring de la url es: ".$query;
    
    


    
    ?>
    
</body>
</html>