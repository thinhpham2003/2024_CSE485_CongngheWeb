<?php
    include "../../models/Employee.php";
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
          header("Location: ../../login.php");
    }
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        if (deleteEmployee($id)){
            header("Location: ../../views/employees/employees_admin.php?mess=Xoá thành công!");
        }
        else{
            header("Location: ../../views/employees/employees_delete.php?err=Lỗi!");
        }
    }
?>


