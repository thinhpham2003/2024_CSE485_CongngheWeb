<?php
    include "../../models/Employee.php";
//    session_start();
//    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
//          header("Location: ../../login.php");
//    }
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        if (deleteEmployee($id)){
            //header("Location: ");
            echo "Thành công";
        }
        else{
            echo "Thất bại";
        }
    }
?>


