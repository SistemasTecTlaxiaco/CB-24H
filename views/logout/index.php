<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet"  type="text/css" href="<?php echo constant('URL');?>public/css/login.css">
    
<body>
    
    <div class="container">
        <img src="public/imagenes/bar.jpg" width="100%" height="100%"/>
    </div>

    <div class="loginbox">
        <div class="registro">
            <form action="<?php echo constant('URL'); ?>home" method="POST"">
            <ul> 
                <li><a href="<?php echo constant('URL');?>registrar">REGISTRARSE</a></li>
            </ul>
        </div>       
        <img src="public/imagenes/cb.png" class="avatar">
        <h1>Login</h1>
        <?php 
            if(isset($errorLogin))
            {
                echo $errorLogin;
            }
        ?>
        <p>Usuario</p>
        <input type="text" name="username" placeholder="Ingrese su Usuario" >
        <p>Contraseña</p>
        <input type="password" name="password" placeholder="Ingrese su Contraseña" >
        <input type="submit" name="" value="Login" >
        <a href="#"> ¿Has olvidado la contraseña? </a>
        </form>
</body>
</head>
</html>