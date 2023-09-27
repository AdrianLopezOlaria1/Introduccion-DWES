<?php 
$imagen=$_GET["imagen"];
$letMeIn=$_GET["letMeIn"] ?? 0;
header('Content-Type: image/png');

if($letMeIn == 1){
    $rutaImagen = '/home/alumno/Documentos/img/' . $imagen;
    if(file_exists($rutaImagen) and $letMeIn==1){        
        imagepng(imagecreatefrompng($rutaImagen));
    }else{
        http_response_code(404); 
        imagepng(imagecreatefrompng('/home/alumno/Documentos/img/imagen.png')); 
    }
     
}else{
    http_response_code(401); 
    imagepng(imagecreatefrompng('/home/alumno/Documentos/img/imagen.png'));
    
}


?>