<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <?php 
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    $password="";
    for ($i=0; $i < $upper; $i++) { 
        $mayuscula = chr(rand(65,89));
        $password = $password.$mayuscula;

    }
    for ($i=0; $i < $lower; $i++) { 
        $minusculas= chr(rand(97,122));
        $password = $password.$minusculas;
    }
    for ($i=0; $i < $numeric; $i++) { 
        $numeros= chr(rand(48,57));
        $password = $password.$numeros;
    }
    for ($i=0; $i < $lower; $i++) { 
        $otro= chr(rand(33,47));
        $password = $password.$otro;
    }

        return $password;
    }
    
    print(rand_Pass());
    ?>
    
</body>
</html>