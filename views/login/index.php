c<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Alogin%3A">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet"  type="text/css" href="<?php echo constant('URL');?>public/css/login.css">
    
<body>
    <!--
    <div class="container">
        <img src="public/imagenes/bar.jpg" width="100%" height="100%"/>
    </div>

    <div class="loginbox">
        <div class="registro">
            <form  action="<?php echo constant('URL');?>home"  method="POST">  
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
        <input type="password" name="password" autocomplete="off" placeholder="Ingrese su Contraseña" >
        <input type="submit" name="" value="Login" >
        <a href="<?php echo constant('URL');?>recuperar contraseña"> Necesito ayuda ¿He olvidado la contraseña? </a>
        </form>-->
    <?php $this->showMessages();?>

    <div class="loginbox">
        <h1>Iniciar sesión</h1>
        <img src="public/imagenes/cb-24h.png" class="avatar">
        <form action="<?php echo constant('URL'); ?>login/authenticate" method="POST">

        <div><?php (isset($this->errorMessage))?  $this->errorMessage : '' ?></div>
            
            <p>
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username" id="username" autocomplete="off" placeholder="Ingrese usuario">
            </p>
            <p>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" autocomplete="off" placeholder="Ingrese Contraseña">
            </p>
            <p>
                
                </i><input type="submit" value="Iniciar sesión" />
            </p>
            <p>
                <a href="<?php echo constant('URL'); ?>signup"> Registrarse</a>
            </p>
        </form>
    </div> 
    
</body>
</head>
</html>
