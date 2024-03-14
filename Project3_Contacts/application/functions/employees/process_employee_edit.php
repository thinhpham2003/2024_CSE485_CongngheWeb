<?php
include "../../models/Employee.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobilePhone = $_POST['mobilePhone'];
    $position = $_POST['position'];
    //$avtar = $_POST['id'];
    echo $name.",",$address;

    if (updateEmployee($id,$name,$address,$email,$mobilePhone,$position, "")){
        header("Location: ../../views/employees/profile.php?action=admin_edit&id={$id}&mess=Sửa thành công!");
    }else{
        header("Location: ../../views/employees/employees_edit.php?id={$id}&err=Lỗi!");
    }
}
?>
