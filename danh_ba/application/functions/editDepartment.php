<?php
require_once '../database.php';

$conn = connectDB();

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die('Department ID is missing.');
}

$departmentID = $_GET['id'];
$departmentName = $_POST['departmentName'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$logo = $_POST['logo'];
$website = $_POST['website'];

$sql = "UPDATE departments
        SET departmentName = '$departmentName', address = '$address', email = '$email', phone = '$phone', logo = '$logo', website = '$website' 
        WHERE departmentID = $departmentID";

$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Lỗi khi thêm người dùng: ' . mysqli_error($conn));
}
else{
        header("Location:../views/departments/departments_admin.php?mess=Sửa thành công");
}
mysqli_close($conn);