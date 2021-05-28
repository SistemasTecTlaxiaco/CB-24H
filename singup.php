<?php
        require_once 'include/user.php';
        require_once 'include/user_session.php';
    
        
            $userSession = new UserSession();
            $user = new User();

            if(isset($_SESSION['user'])){
                //echo "hay sesion";
                $user->setUser($userSession->getCurrentUser());
                //include_once 'home/index.php';
                echo constant('URL'); ?home;

            }else if(isset($_POST['username']) && isset($_POST['seguridad'])){
                
                $userForm = $_POST['username'];
                $passForm = $_POST['seguridad'];

                $user = new User();
                if($user->userExists($userForm, $passForm)){
                    //echo "Existe el usuario";
                    $userSession->setCurrentUser($userForm);
                    $user->setUser($userForm);
                    echo constant('URL');home;
                    //require_once 'views/home/index.php';
                    
                    
                    
                }else{
                    //echo "No existe el usuario";
                    $errorLogin = "Nombre de usuario y/o password incorrecto";
                    //require_once 'views/login/index.php';
                    echo constant('URL');login;

                    
                    function render()
                    {
                        $this->view->render('home/index');
                    }
                }
            }else{
                //echo "login";
                //include_once 'login/index.php';
                echo constant('URL'); ?login;
            
        }
    
?>
