<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/registr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    
<body>

    <div class="container">
        <img src="public/imagenes/bar.jpg" width="100%" height="100%"/>
    </div>

    <div class="loginbox">
        
        <form action="<?php echo constant('URL'); ?>registrar/registrarUsuario" method="POST">
        
        <h1 class="animate__animated animate__backInLeft">CREAR USUARIO</h1>
        <div class="mesage"><?php echo $this->mensaje; ?></div>

        <p>Nombre</p>
        <input type="text" name="nombre" placeholder="Ingrese su Usuario" required>

        <p>Usuario</p>
        <input type="text" name="username" placeholder="Ingrese su Usuario" required>

        <p>Contraseña</p>
        <input type="password" name="seguridad" placeholder="Ingrese una contraseña" required>
        
        <p>Nombre del Local</p>
        <input type="text" name="negocio" placeholder="Nombre del Negocio" required>

        <p>Descipción del Negocio</p>
        <input type="text" name="descripcion" placeholder="Ingrese informacion sobre su Negocio" required>

        <p>Ubcación</p>
        <input type="text" name="ubicacion" placeholder="Ingrese Ubicacion" required>

        <input type="submit" name="" value="Registrar">
        <a href="#">Al registrarse estara aceptando los terminos y condiciones de aplicación</a>
        
        </form>
   
</body>
</head>
</html>