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
    <form action="mostrarReg.php" method="post">
        Nombre de usuari@
        <input type="text" name="nombre"><br>
        Correo Electrónico
        <input type="email" name="email"><br> 
        Contraseña
        <input type="password" name="contra"><br> 
        Confirma la contraseña
        <input type="password" name="confi"><br>
        <p><button type="submit">REGISTRARSE</button></p> 
    </form>
    <p>¿Ya eres miembro? <a href="login.php">Acceso usuari@s</a></p>
    <?php 
    
    ?>

</body>
</html>
