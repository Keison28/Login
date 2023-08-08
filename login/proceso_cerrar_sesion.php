<?php 

    if(isset($_POST["botoncerrar"])){

        session_start();
        
        if(isset($_SESSION["usuario_correo"])){

            session_destroy();
            header("location: login.php");
        }


    }
?>