<?php
    
    class Logout extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function render()
        {
            include_once 'include/user_session.php';
            $userSession = new UserSession();
            $userSession->closeSession();
            $this->view->render('login/index');
        }
    }
?>