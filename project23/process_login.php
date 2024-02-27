<?php
    include "data.php";

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = null;
    foreach ($uses as $u){
        if($u['username'] === $username){
            $user = $u;
            break;
        }
    }

    if ($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['username'];
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
        header("Location: profile.php");
    }else{
        echo "Invalid username or password.";
    }
?>
