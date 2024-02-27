<?php
    include "data.php";
    session_start();
    if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
        header("Location: login.php");
    }
    $username = $_SESSION['user_id'];
    $user = null;
    foreach ($uses as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }
    //echo $user;
    if ($user) {
        // Display user information
        echo "Welcome, " . $user['name'] . "!";
        echo "<br>Email: " . $user['email'];
        echo "<br><a href='logout.php'>Log out</a>";
    } else {
        echo "Error: User not found.";
    }
?>
