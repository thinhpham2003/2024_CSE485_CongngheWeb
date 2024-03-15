<?php
require_once '../database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $employee_id = $_POST['EmployeeID'];
    if (empty($username)) {
        echo 'Du lieu k hop le';
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $conn = connectDB();
    $sql = "INSERT INTO users (Username, Password, Role, EmployeeID) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $username, $hashed_password, $role, $employee_id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($result) {
        header("Location:../views/users/users_list.php?mess=Thêm thành công");
    } else {
        header("Location:../views/users/users_list.php?err=Lỗi");
    }
    exit;
}
?>
