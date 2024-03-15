<?php
include "../../models/Employee.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['Name'];
    $address = $_POST['Address'];
    $email = $_POST['Email'];
    $mobilePhone = $_POST['MobilePhone'];
    $position = $_POST['Position'];
    $departmentID = $_POST['DepartmentID'];

    $upload_directory = '../../../public/assets/image/employees_avatar';
    $avatar_name = "employee_avatar_" . $name;

    if(isset($_FILES['Avatar'])) {
        $avatar_tmp = $_FILES['Avatar']['tmp_name'];
        $avatar_extension = 'jpg';
        $target_path = "$upload_directory/$avatar_name.$avatar_extension";
        move_uploaded_file($avatar_tmp, $target_path);
    }

    if (addEmployee($name,$address,$email,$mobilePhone,$position,$departmentID ,$avatar_name)){
        header("Location: ../../views/employees/employees_admin.php?mess=Thêm thành công!");
    }else{
        header("Location: ../../views/employees/add.php?err=Lỗi!");
    }
}