<?php 
    session_start(); 
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Para acceder a esta página, debes iniciar sesión primero";
        header('location: login.php?returnToUrl=galeria.php');
    }
$_SESSION['username']= $username;
$_SESSION['success']="Ahora estás logeado";
unset($_SESSION['msg']);
if(isset($_GET["returnToUrl"])){
    header('location: '.$_GET["retunToUrl"]);
}else{
    header('location: index.php');
}
?>