<?php

    class SingUp extends SessionController
    {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje="";
            
        }

        function render()
        {
            $this->view->render('singup/index'. []);
        }
        
    }
    ?>