<?php 
    $mode2 = $_GET["mode"] ?? ($_COOKIE["mode2"] ?? "light");
    setcookie("mode2",$mode2,time()+30*24*60*60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo claro - oscuro</title>
    <style type="text/css">
    .light{
        background-color: white;
    }
    .dark{
        background-color: grey;
    }
    </style>
</head>
<body class="<?=$mode2 ?>">
    <a href="?mode=light">Claro</a>
    <a href="?mode=dark">Oscuro</a>

</body>
</html>