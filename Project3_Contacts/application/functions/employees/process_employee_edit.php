<?php
include "../../models/Employee.php";
include "../../models/User.php";
$id_user = $_SESSION['user_id'];
$role = $_SESSION['user_role'];
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobilePhone = $_POST['mobilePhone'];
    $position = $_POST['position'];
    $departmentID = $_POST['DepartmentID'];
    //$avtar = $_POST['id'];
    $user = getUserID($id_user);

    if (updateEmployee($id,$name,$address,$email,$mobilePhone,$position,$departmentID, "")){
        if ($user['Role'] == 'regular') {
            header("Location: ../../views/employees/profile.php?id={$id}&mess=Sửa thành công!");
        }else{
            header("Location: ../../views/employees/profile_admin.php?id={$id}&mess=Sửa thành công!");
        }
    }else{
        if ($user['Role'] == 'regular') {
            header("Location: ../../views/employees/employees_edit.php?id={$id}&err=Lỗi!");
        }else{
            header("Location: ../../views/employees/employees_edit_admin.php?id={$id}&err=Lỗi!");
        }
    }
}
?>
