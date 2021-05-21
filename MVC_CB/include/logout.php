<?php
    include_once 'include/user_session.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: ../singup.php");

?>