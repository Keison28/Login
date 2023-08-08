<?php 
    include("conexionbbs.php");

    if(isset($_POST["botondeenviar"])){

        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $secretkey = "6Ldoi8giAAAAAFI0JQPO3X97Shs7tIt-29sK5DMo";

        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

        $atributos = json_decode($respuesta,true);


        if(strlen( $_POST['correo']) >= 1 && strlen( $_POST['nombrett']) >= 1 && strlen($_POST['apellidott']) >=1 && strlen($_POST['clave']) >= 1){
            
            
            $correo = $_POST['correo'];

            $nombre = $_POST['nombrett'];

            $apellido = $_POST['apellidott'];

            $clave = md5($_POST['clave']);

            $consulta = "INSERT INTO datos(correo,nombre, apellido, clave) VALUES ('$correo','$nombre','$apellido ','$clave')";

            function buscar_ususarios_Repetidos($correo,$conexion){
                $consulta_usuario="SELECT * from datos where correo='$correo'";

                $resultado_busqueda_repetido=mysqli_query($conexion,$consulta_usuario);
    
                if(mysqli_num_rows($resultado_busqueda_repetido) > 0){
                    return 1;
                }else{
                    return 0;
                }
            }

            if(buscar_ususarios_Repetidos($correo,$conexion)==0){

                $resultado = mysqli_query($conexion,$consulta);
                
                
                header("location: login.php");
                

            }else{
                
                echo"<center><h1 >Ese usuario ya existe</h1></center>";
                
            }


 

        }else{
            ?>
            <?php
            echo"<br><center><h1>Debe completar los campos</h1></center>";
            ?>
            <?php
        }

    }
?>