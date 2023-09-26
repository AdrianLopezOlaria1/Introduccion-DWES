<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idioma</title>
</head>
<body>
    <?php 
    $idiomas=[
        "es" => "Esta es mi pagina web",
        "en" => "This is my web page"
    ];

    $idiomaPorDefecto= 'en';
    
    $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

    if(isset($idioma)&& isset($idiomas[$idioma])){
        print $idiomas[$idioma];

    }else{
        print $idiomas[$idiomaPorDefecto];

    }
    

    ?>
</body>
</html>