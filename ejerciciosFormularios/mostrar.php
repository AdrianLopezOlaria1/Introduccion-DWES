<html>
<body>
    <?php 

    function filtrado($datos){
        $datos = trim($datos); 
        $datos = stripslashes($datos); 
        $datos = htmlspecialchars($datos); 
        return $datos;
    }
    
    if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = filtrado($_POST["nombre"]);
        $password = filtrado($_POST["email"]);
        $educacion = filtrado($_POST["estudios"]);

        echo "Hola ";
        echo $_POST["nombre"]."<br>"; 
        echo "Tu email es: ". $_POST["email"]."<br>";
        echo "Tus estudios son: ".$_POST["estudios"] . "<br>";
        echo "Tu avatar: ".$_POST["avatar"]."<br>";
    }
    

 ?>
</body>
</html>