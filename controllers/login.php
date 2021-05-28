<?php

    class Login extends Controller
    {
        function __construct()
        {
            parent::__construct();
            //echo "<p>Nuevo Main</P>";
        }
        
        function render()
        {
            //Cargamos la vista desde nuestro controlador para la vista login
            $this->view->render('login/index');
        }

    }
?>
