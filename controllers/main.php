<?php

    class Main extends Controller
    {
        function __construct()
        {
            parent::__construct();
            //echo "<p>Nuevo Main</P>";
        }
        function render()
        {
            $this->view->render('main/index');
        }

    }
?>