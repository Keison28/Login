<?php

    include("conexionbbs.php");

    session_start();

    
    if(isset($_SESSION["usuario_correo"])){


        $correo_del_usuario = $_SESSION["usuario_correo"];

        $consulta_nombre_apellido_usuario="SELECT * from datos where correo='$correo_del_usuario'";

        $resultado_consulta_nombre_apellido_usuario=mysqli_query($conexion,$consulta_nombre_apellido_usuario);

        
        $mostrar_datos=mysqli_fetch_array($resultado_consulta_nombre_apellido_usuario);

    
        
        echo "<h1>bienvenido: ", $mostrar_datos['nombre']," ", $mostrar_datos['apellido'],"</h1>";
     
        
    }else{
        echo "<h1>Lo siento pero por metodos de seguridad debe iniciar session!</h1>";

        if(isset($_POST["botoncerrar"])){

            session_destroy();
            header("location: login.php");
    
        }
    }

?>