<?php

    include_once 'includes/user.php';
    include_once 'includes/user_session.php';
    
    $userSession = new UserSession();
    $user = new User();

    //It check if the current session is open.
    if(isset($_SESSION['user']))
    {
        // $user->setUser($userSession->getCurrentUser());
        // include_once 'vistas/home.php';
    }
    // It check if user do it click in the submit buttom, and send data requiered.
    else if(isset($_POST['username']))
    {
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];

        // It check if user exist into de DB.
        if($user->userExists($userForm))
        {
            // $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            include_once 'vistas/home.php';
        }
        else
        {
            //echo "nombre de usuario y/o password incorrecto";
            $errorLogin = "Nombre de usuario y/o password es incorrecto";
            include_once 'vistas/login.php';
        }

    }
    else
    {
        //echo "Login";
        include_once 'vistas/login.php';
    }


?>