<?php
require_once '../database.php';

function getUsers()
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


session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$user = null;

foreach (getUsers() as $u) {
    if ($u['Username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user && $password == $user['Password']) {
    if($user['Role'] == "admin")
    {

        $_SESSION['user_id'] = $user['EmployeeID'];
        $_SESSION['user_role'] = $user['Role'];
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
        header('Location: ../../application/views/departments/departments_admin.php');
    }
    else {
        $_SESSION['user_id'] = $user['EmployeeID'];
        $_SESSION['user_role'] = $user['Role'];
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
        header('Location: ../../application/views/departments/departments_regular.php');
    }
}
else {
    echo "Invalid username or password.";
}
?>