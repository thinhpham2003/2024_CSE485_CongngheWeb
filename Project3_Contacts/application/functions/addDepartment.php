<?php
require_once '../database.php';

$conn = connectDB();
$departmentName = $_POST['departmentName'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];

$upload_directory = '../../public/assets/image/departments_logo';
$logo_name = "department_logo_" . $departmentName;

if(isset($_FILES['logo'])) {
    $logo_tmp = $_FILES['logo']['tmp_name'];
    $logo_extension = 'jpg';
    $target_path = "$upload_directory/$logo_name.$logo_extension";
    move_uploaded_file($logo_tmp, $target_path);
}

$sql = "INSERT INTO departments(departmentName, address, email, phone, logo, website) 
        VALUES ('$departmentName', '$address', '$email', '$phone', '$logo_name', '$website')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Lỗi khi thêm người dùng: ' . mysqli_error($conn));
}
else{
    header("Location:../views/departments/departments_admin.php?mess=Thêm thành công");
}
mysqli_close($conn);