<?php 
    session_start(); 
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Para acceder a esta página, debes iniciar sesión primero";
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola <?= $_SESSION["username"] ?>
    <a href="logout.php">Log out</a>

</body>
</html>