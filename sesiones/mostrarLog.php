<html>
<body>
Hola <?php echo $_POST["nombre"]; ?><br>
Contraseña es: <?php echo $_POST["contra"]; ?>
<?php 
    session_start(); 
    header('location: pagina_privada.php')
    
    ?>

</body>
</html>