<?php
require_once '../database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (empty($username)) {
        echo 'Du lieu k hop le';
        exit;
    }

    $conn = connectDB();
    $sql = "INSERT INTO users (username, role, password) VALUES (?, ?, ?)";
    // No hashing of the password
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username,  $role, $password);
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
