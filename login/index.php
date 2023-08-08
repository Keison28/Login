<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/formu.css">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/776e8f66f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMh13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="niveldeseguridad.js"></script>
</head>

<body>
    

    <form method="POST">

        <h1>Registrarte php</h1>

        <h4>Llenar el siguiente formulario</h4>

        <p> <i class="fa-solid fa-square-envelope"></i>  <input class="texto"  type="email" name="correo" placeholder="ingrese correo electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> </p>

        <p> <i class="fa-regular fa-user"></i> <input class="texto"  type="text" name="nombrett" placeholder="ingrese nombre" pattern="[A-Za-z]+"/> </p>

        <p> <i class="fa-solid fa-user"></i> <input class="texto"  type="text" name="apellidott" placeholder="ingrese apellido" pattern="[A-Za-z]+" /> </p>

        <p id="espacio-ojo"> <i class="fa-sharp fa-solid fa-lock"></i>  <input class="clave pwd"  type="password" name="clave" placeholder="ingrese Clave"/> <i class="fa-regular fa-eye ver" type="button" name="wf" onclick="mostrar()"></i> </p>

        <strong><span id="mensaje_seguridad"></span></strong>

        <p id="espacio-ojo-2"> <i class="fa-sharp fa-solid fa-lock"></i> <input class="texto pwd"  type="password" name="clavett1" placeholder="confirmar clave"/> <i class="fa-regular fa-eye ver ojo2" type="button" name="wf" onclick="mostrar()"></i> </p>
        
        <span id="comparacion"></span>

        <br>
        <div class="g-recaptcha" data-sitekey="6Ldoi8giAAAAAOPk8bfGIkq5OluMNrKa0IO_80CE"></div>
        <br>

        <button class="decorarboton" type="submit" name="botondeenviar">Registrar </button>

        

        <p class="linkmaster"><a class="link" href="login.php" title="otra pagina">Ya tiene una cuenta? Iniciar sesion</a></p>

    </form>

    <?php
    include("insertarPHP.php");
    ?>

</body>

</html>



<script type="text/javascript">


const ver = document.querySelectorAll('.ver')
const pwds = document.querySelectorAll('.pwd')
ver.forEach((element, index) => {
    element.addEventListener('click', e => {
        if (pwds[index].type === 'password') {
            pwds[index].type = 'text'
            ver[index].className = 'ver fa-solid fa-eye-slash'
        }
        else {
            pwds[index].type = 'password'
            ver[index].className = 'ver fa-regular fa-eye'
        }
    })

})


    
</script>




