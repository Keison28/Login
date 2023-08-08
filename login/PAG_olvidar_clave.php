<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/login.css">
    <title>Olvido su clave</title>

    <script src="https://kit.fontawesome.com/776e8f66f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMh13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    

    <form method="POST">

        <h1>Ingrese su correo electronico</h1>

        

        <p> <i class="fa-solid fa-square-envelope"></i>  <input class="texto"  type="email" name="correo" placeholder="ingrese correo electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" /> </p>



        <button class="decorarboton" type="submit" name="botonenviar">Enviar correo</button>

        <p class="linkmaster"><a class="link" href="login.php" title="otra pagina">Ya recordaste? inicia sesion</a></p>

    </form>


</body>

</html>