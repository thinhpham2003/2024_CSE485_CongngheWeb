<?php
$username = $_GET['username'];

$conn = mysqli_connect('localhost', 'root', '', 'phone_number');
if (!$conn) {
    die('Lỗi kết nối');
}
$sql = "DELETE FROM users WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
$result = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
if ($result) {
    header("Location:../views/users/users_list.php?mess=Xoá thành công");
} else {
    header("Location:../views/users/users_add.php?err=Lỗi xoá");

}