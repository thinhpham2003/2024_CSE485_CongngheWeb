<?php
include "../../models/Employee.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $address = $_POST['Address'];
    $email = $_POST['Email'];
    $mobilePhone = $_POST['MobilePhone'];
    $position = $_POST['Position'];
    $avtar = $_POST['Avatar'];

    if (addEmployee($name,$address,$email,$mobilePhone,$position, $avtar)){
        header("Location: ../../views/employees/employees_admin.php?mess=Thêm thành công!");
    }else{
        header("Location: ../../views/employees/add.php?err=Lỗi!");
    }
}