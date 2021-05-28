<?php
    class View
    {
        function __construct()
        {
           //echo "<p>Vista base </p>";
        }
        function render($nombre)
        {
            //definimos la ruta de las vistas, para que mande a llamar al archivo ya con una asignacion de carga de archivo .PHP
            require 'views/' .$nombre . '.php';
        }
    }
?>
