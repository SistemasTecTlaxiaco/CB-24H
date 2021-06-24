<?php

    class Home extends Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje="";
            //echo "<p>Nuevo Main</P>";
        }

        function render()
        {
            $this->view->render('home/index');
        }
        
    }
    ?>