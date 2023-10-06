<?php 
require('con.php');
session_start();

if (isset($_POST['enviar'])) {
    
    echo "Has, pulsado acceder <br>";
    if(empty($_POST['nombre'])|| empty($_POST['contra'])){
        echo "No puede haver ningun campo vacío, usuario o contraseña vacío";
    }else{
        echo "Los campos estan completos <br>";
        $resultado = $pdo->prepare('SELECT * FROM users WHERE username = ?');
        $resultado->bindParam(1, $_POST['nombre']);
        $resultado->execute();
        $bd=$resultado->fetch();
        $contraseña = $bd['password'] ?? " ";
        if($_POST['contra'] != $contraseña){
            echo "Contraseña incorrecta";
        }else{
            $_SESSION["username"]=$bd["username"];
            echo "Has iniciado sesion";
            header('location: privada.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title> 
      <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="post" >
        Nombre de usuari@
        <input type="text" name="nombre"><br>
        Contraseña
        <input type="password" name="contra"><br> 
        <p><button name="enviar" type="submit">ACCEDER</button></p> 
    </form>
    <p>¿Todavía no eres miembro? <a href="registro.php">Registrate</a></p>
    
</body>
</html>