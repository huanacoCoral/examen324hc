<?php 
    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contraseña"];
     session_start();//hace q funcione ususarios
    if($usuario=="j" && $contraseña=="12")
    {
        $_SESSION["usuario"]="juan";
        $_SESSION["color"]="#DE89DB ";
        header("Location: index.php");
        exit;
    }
    if($usuario=="maria" && $contraseña=="12")
    {
        $_SESSION["usuario"]="maria";
        $_SESSION["color"]="#65F3D7";
        header("Location: index.php");
        exit;
    }
    else{
        $_SESSION["usuario"]="nohay";
        header("Location: index.php");//regresa 
        exit;
    }
?>