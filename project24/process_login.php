<?php
    include "data.php";
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_found = false;

    foreach ($uses as $u){
        if ($u['username']===$username && password_verify($u['password'],$password)){
            $user_found = true;
            $_SESSION['use_id'] = $u['username'];
            $_SESSION['user_role'] = $u['role'];
            break;
        }
    }

    if ($user_found){
        setcookie('logged_in', true, time()+3600*24*30, "/");
        header("Location: profile.php");
    }else{
        echo "Invalid username or password.";
    }


?>
