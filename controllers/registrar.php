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
            //cargamos la vista indes para el registro 
            $this->view->render('registrar/index');
        }
        
        function registrarUsuario()
        {
            //echo "Usuario Creado";
            //capturamos datos del formulario para pasarlo a la base de datos
            $nombre         = $_POST['nombre'];
            $username       = $_POST['username'];
            $seguridad      = $_POST['password'];
            $negocio        = $_POST['negocio'];
            $descripcion    = $_POST['descripcion'];
            $ubicacion      = $_POST['ubicacion'];
            //pasamos informacion a travez de un arreglo

            $mensaje ="";
            
            if($this->model->insert(['nombre' => $nombre, 'username' => $username, 'password' => md5($seguridad), 'negocio'=> $negocio, 'descripcion'=> $descripcion, 'ubicacion'=> $ubicacion])){
                $mensaje = "USUARIO CREADO";
            }else{
                $mensaje = "YA EXISTE USUARIO ";
            }

            $this->view->mensaje = $mensaje;
            $this->render();
        }
    }
?>
