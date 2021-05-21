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
            $this->view->render('login/index');
        }

    }
?>