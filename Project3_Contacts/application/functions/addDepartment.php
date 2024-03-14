<?php
require_once '../database.php';

$conn = connectDB();
$departmentName = $_POST['departmentName'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$logo = $_POST['logo'];
$website = $_POST['website'];

$sql = "INSERT INTO departments(departmentName, address, email, phone, logo, website) 
        VALUES ('$departmentName', '$address', '$email', '$phone', '$logo', '$website')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Lỗi khi thêm người dùng: ' . mysqli_error($conn));
}
else{
    header("Location:../views/departments/departments_admin.php?mess=Thêm thành công");
}
mysqli_close($conn);