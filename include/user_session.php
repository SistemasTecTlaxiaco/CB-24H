<?php

    class UserSession{

        public function __construct(){
            session_start();
        }

        public function setCurrentUser($usuario){
            $_SESSION['usuario'] = $usuario;
        }

        public function getCurrentUser(){
            return $_SESSION['usuario'];
        }

        public function closeSession(){
            session_unset();
            session_destroy();
        }
    }

?>