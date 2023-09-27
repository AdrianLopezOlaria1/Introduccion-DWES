<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
    <?php 

    $dejameEntrar=$_GET["dejameEntrar"]?? 0;

    if($dejameEntrar==1){
        echo("Bienvenido");
    }else{
        header('Location: login.php');
        exit();
    }
    ?>
</body>
</html>