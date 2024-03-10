<?php
require_once '../../application/database.php';
$Username = $_GET['Username'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $oldPassword = $_POST['Password_Old'];
    $newPassword = $_POST['Password1'];
    $confirmPassword = $_POST['Password2'];
    echo $oldPassword;
    if ( empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        header("Location:user_edit.php?err=Du lieu k hop le");
        exit;
    }

    if ($newPassword != $confirmPassword) {
        header("Location:user_edit.php?err=mat khau khong trung khop");
        exit;
    }

    $conn = connectDB();
    $sql = "SELECT Password FROM users WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $Username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    // Compare the old password directly
    if ($oldPassword != $user['Password']) {
        header("Location:user_edit.php?err=Mat khau cu khong dung");
        exit;
    }

    // Hash the new password before storing it
    $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET Password = ? WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $hashed_password, $Username);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($result) {
        header("Location:profile.php?msg=Chỉnh sửa mk thành công");
    } else {
        header("Location:user_edit.php?err=Lỗi");
    }
    exit;

}
?>