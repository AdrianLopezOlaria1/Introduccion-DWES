<?php 
require('con.php');
session_start();

if (isset($_POST['registrarse'])) {
    
    echo "Has, pulsado registrarse <br>";
    if(empty($_POST['nombre'])|| empty($_POST['email'])||empty($_POST['contra'])|| empty($_POST['confi'])){
        echo "No puede haver ningun campo vacío";
    }else{
        if($_POST['contra'] == $_POST['confi']){
            echo "Las contraseñas coinciden";
            
            $pdoSt = $pdo->prepare('INSERT INTO users (username,email,password) VALUES (?,?,?)');
            $pdoSt->bindParam(1, $_POST['nombre']);
            $pdoSt->bindParam(2, $_POST['email']);
            $pdoSt->bindParam(3, $_POST['contra']);
            $pdoSt->execute();
            echo "Te has registrado";

        }else{
            echo "Las contraseñas no coinciden";    
        }
        
    }
   // <link rel="stylesheet" href="styles.css">
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="post">
        Nombre de usuari@
        <input type="text" name="nombre"><br>
        Correo Electrónico
        <input type="email" name="email"><br> 
        Contraseña
        <input type="password" name="contra"><br> 
        Confirma la contraseña
        <input type="password" name="confi"><br>
        <p><button type="submit" name="registrarse">REGISTRARSE</button></p> 
    </form>
    <p>¿Ya eres miembro? <a href="login.php">Acceso usuari@s</a></p>
    <?php 
    
    ?>

</body>
</html>
