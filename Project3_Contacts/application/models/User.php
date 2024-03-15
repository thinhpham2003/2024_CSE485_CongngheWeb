<?php
require_once '../../database.php';
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

function userSearch($keyword)
{
    $conn = connectDB();
    $escaped_keyword = mysqli_real_escape_string($conn, $keyword);
    $sql = "SELECT * FROM users WHERE Username LIKE '%$escaped_keyword%' OR Password LIKE '%$escaped_keyword%' OR Role LIKE '%$escaped_keyword%' OR EmployeeID LIKE '%$escaped_keyword%'";
    $result = mysqli_query($conn, $sql);
    $department = [];
    while ($row = mysqli_fetch_assoc($result)){
        $department[] = $row;
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    return $department;
}

function userAdd(){
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
            header("Location:../views/users/usersw_list.php?err=Lỗi");
        }
        exit;
    }
}

function getUserId($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE EmployeeID = '".$id."';";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $user;
}

?>


