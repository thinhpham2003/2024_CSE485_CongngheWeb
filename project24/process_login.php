<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$users = [
    [
        "username" => "johndoe",
        "password" => password_hash("password123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "role" => "user"
    ],
    [
        "username" => "janedoe",
        "password" => password_hash("password456", PASSWORD_DEFAULT),
        "name" => "Jane Doe",
        "email" => "janedoe@example.com",
        "role" => "admin"
    ],

];
$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
    ],

];
$user_found = false;
foreach ($users as $u) {
    if ($u['username'] === $username && password_verify($password,
            $u['password'])) {
        $user_found = true;
        $_SESSION['user_id'] = $u['username'];
        $_SESSION['user_role'] = $u['role'];
        break;
    }
}
if ($user_found) {
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
               header('Location: profile.php');
} else {
    echo "Invalid username or password.";
}
?>
