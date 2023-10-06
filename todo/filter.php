<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
</head>
<body>
    <?php 
    $contactos = array(
        ["codigo" => 1, "nombre" => "Juan Pérez",
        "telefono" => "966112233", "email" => "juanp@gmail.com"],
        ["codigo" => 2, "nombre" => "Ana López",
        "telefono" => "965667788", "email" => "anita@hotmail.com"],
        ["codigo" => 3, "nombre" => "Mario Montero",
        "telefono" => "965929190", "email" => "mario.mont@gmail.com"],
        ["codigo" => 4, "nombre" => "Laura Martínez",
        "telefono" => "611223344", "email" => "lm2000@gmail.com"],
        ["codigo" => 5, "nombre" => "Nora Jover",
        "telefono" => "638765432", "email" => "norajover@hotmail.com"]
        );
                print_r($contactos);
                echo '<br>';
                $filtrarPor = strtolower($_GET["dominio"] ?? NULL);
                $filtrados = array_filter($contactos, 
                    function($contacto) use ($filtrarPor){
                        $email = strtolower($contacto["email"]);
                        return strpos($email, $filtrarPor) !== FALSE;
                                //strpos busca si la subcadena $filtrarPor esta en el correo del contacto,si esta guarda el contacto entero en filtrados
                    });
            
                print_r($filtrados);
    ?>
</body>
</html>