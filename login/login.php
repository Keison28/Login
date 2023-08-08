<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/login.css">
    <title>Login </title>

    <script src="https://kit.fontawesome.com/776e8f66f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMh13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    

    <form method="POST">

        <h1>Iniciar sesion</h1>

        

        <p> <i class="fa-regular fa-user"></i>  <input class="texto"  type="email" name="correo" placeholder="ingrese correo electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" /> </p>

        <p id="espacio-ojo"> <i class="fa-sharp fa-solid fa-lock"></i>  <input class="texto pwd"  type="password" name="clave" placeholder="ingrese Clave" /><i class="fa-regular fa-eye ver ojo" type="button" name="wf" onclick="mostrar()"></i> </p>


        

        <button class="decorarboton" onclick="" type="submit" name="botoniniciar">iniciar sesion </button>

        <p class="linkmaster"><a class="link" href="index.php" title="otra pagina">No tiene cuenta? registrese</a></p>
        
        <p class="linkmaster"><a class="link" href="PAG_olvidar_clave.php" title="otra pagina">Olvido su contraseña?</a></p>

    </form>

    <?php
    include("proceso_iniciar_sesion.php");
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