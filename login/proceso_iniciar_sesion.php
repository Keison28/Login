<?php 
    include("conexionbbs.php");

    if(isset($_POST["botoniniciar"])){




        if(strlen( $_POST['correo']) >= 1 && strlen($_POST['clave']) >= 1){
            
            
            $correo = $_POST['correo'];


            $clave = md5($_POST['clave']);




            session_start();
            

            function buscar_usuarios_Repetidos($correo,$clave,$conexion){
                $consulta_usuario="SELECT * from datos where correo='$correo' and clave='$clave'";

                $resultado_busqueda_repetido=mysqli_query($conexion,$consulta_usuario);
    
                if(mysqli_num_rows($resultado_busqueda_repetido) > 0){
                    return 1;
                }else{
                    return 0;
                }
            }

            if(buscar_usuarios_Repetidos($correo,$clave,$conexion)==1){
                
                $_SESSION["usuario_correo"] = $correo;
             
                header("location: bootstrap.php");
                
                

            }else{
                
                echo"<center><h3>Nombre de usuario o contraseña incorrectos</h3></center>";
                
            }

        }else{
            ?>
            <?php
            echo"<br><center><h3>Debe conpletar los campos</h3></center>";
            ?>
            <?php
        }

    }
?>