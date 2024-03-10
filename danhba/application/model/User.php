<?php
require_once '../../application/database.php';
function getAllUsers()
{
    $conn = connectDB();
    $sql = "SELECT *FROM users ORDER BY username ASC ";
    $result = mysqli_query($conn, $sql);
    $user = [];
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            $user[] = $row;
        }
    }
    mysqli_close($conn);
    return $user;
}
function getUserInfor($Username)
{
    $conn = connectDB();
    $sql = "SELECT *FROM users WHERE Username=?";
    $stmt = mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"s",$Username);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $user;
}

function updateUser( $Username,  $Password) {

    $conn = connectDB();
    $sql = "UPDATE users SET Username = ?,  Password = ? ";
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $Username, $email,
        $hashed_password, $id);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}
?>