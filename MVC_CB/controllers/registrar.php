<?php

    class Registrar extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje="";
            //echo "<p>Nuevo Main</P>";
        }

        function render()
        {
            $this->view->render('registrar/index');
        }
        
        function registrarUsuario()
        {
            //echo "Usuario Creado";
            //capturamos datos del formulario para pasarlo a la base de datos
            $nombre         = $_POST['nombre'];
            $username       = $_POST['username'];
            $seguridad      = $_POST['seguridad'];
            $negocio        = $_POST['negocio'];
            $descripcion    = $_POST['descripcion'];
            $ubicacion      = $_POST['ubicacion'];
            //pasamos informacion a travez de un arreglo

            $mensaje ="";
            
            if($this->model->insert(['nombre' => $nombre, 'username' => $username, 'seguridad' => md5($seguridad), 'negocio'=> $negocio, 'descripcion'=> $descripcion, 'ubicacion'=> $ubicacion])){
                $mensaje = "NUEVO USUARIO CREADO";
            }else{
                $mensaje = "EL USUARIO YA EXISTE";
            }

            $this->view->mensaje = $mensaje;
            $this->render();
        }
    }
?>