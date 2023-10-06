<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part List</title>
</head>
<body>
    <?php 
    $array = ["Seguro", "que", "apruebo", "esta", "asignatura"];
    
    function partlist($array){
        $longitud=count($array);
        for ($i=1; $i < $longitud; $i++) { 
            $array1 = array_slice($array,0,$i);
            $array2 = array_slice($array,$i);
            
            //return $array1;
            $nuevoarray[]=[implode(' ',$array1),implode(' ',$array2)];
        }
        
        return $nuevoarray;   
    }
    print_r(partlist($array))

    

    ?>
</body>
</html>