<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach 2</title>
</head>
<body>
    <?php 
    $colores = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
    echo '<ul>';
    foreach ( $colores as $color => $url ) {
        echo '<li>';
                
                echo '<a href='.$url.'>'.$color.'</a>';
                
                echo '</li>';
    }
    echo '</ul>';
    ?>
    
</body>
</html>