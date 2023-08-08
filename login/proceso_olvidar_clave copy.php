<?php

    include("conexionbbs.php");

    

    if(isset($_POST["botonenviar"])){

        if(strlen( $_POST['correo']) >= 1){
            
            
            $correo = $_POST['correo'];
            

            function buscar_usuario($correo,$clave,$conexion){
                $consulta_usuario="SELECT * from datos where correo='$correo' ";

                $resultado_busqueda_repetido=mysqli_query($conexion,$consulta_usuario);
    
                if(mysqli_num_rows($resultado_busqueda_repetido) > 0){
                    return 1;
                }else{
                    return 0;
                }
            }

            if(buscar_usuarios_Repetidos($correo,$clave,$conexion)==1){
                
                
             //eo manito del futuro te quedaste aqui
                
                
                

            }else{
                
                echo"<center><h3>Este usuario no existe en la base de datos</h3></center>";
                
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