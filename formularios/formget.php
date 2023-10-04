<html>
<body>
Hola <?php echo $_GET["nombre"]; ?><br>
Tu email es: <?php echo $_GET["email"]; ?>

<?php 
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = filtrado($_POST["nombre"]);
    $password = filtrado($_POST["email"]);
    
}
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
} ?>
</body>
</html>