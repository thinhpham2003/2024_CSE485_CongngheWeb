<?php
    include "data.php";
    session_start();

    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
        header("Location: login.php");
    }

    $username = $_SESSION['user_id'];
    $user = null;
    // Retrieve user data based on username (use prepared statements in real DB)
    foreach ($users as $u) {
         if ($u['username'] === $username) {
           $user = $u;
           break;
      }
    }



?>
