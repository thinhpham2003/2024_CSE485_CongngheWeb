<<?php
require_once '../../application/database.php';
$Username = $_GET['username'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $oldPassword = $_POST['Password_Old'];
    $newPassword = $_POST['Password1'];
    $confirmPassword = $_POST['Password2'];
    $role = $_POST['Role'];

    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword) || empty($role)) {
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

    if (!password_verify($oldPassword, $user['Password'])) {
        header("Location:user_edit.php?err=Mật khẩu cũ không đúng");
        exit;
    }

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET Password = ?, Role = ? WHERE Username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $hashedPassword,$role, $Username);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($result) {
        header("Location:../views/users/users_list.php?mess=Chỉnh sửa thành công");
    } else {
        header("Location:users_edit.php?err=Lỗi");
    }
    exit;
}
?>