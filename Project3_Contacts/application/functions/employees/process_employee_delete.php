<?php
    include "../../models/Employee.php";
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
          header("Location: ../../login.php");
    }
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        if (deleteEmployee($id)){
            header("Location: ../../views/employees/employees_admin.php?mess=Xoá thành công!");
        }
        else{
            header("Location: ../../views/employees/employees_delete.php?err=Lỗi!");
        }
    }
?>


