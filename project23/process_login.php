<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$user = null;

$users =
    [
        ["username" => "johndoe",
            "password" => password_hash("password123", PASSWORD_DEFAULT),
            "name" => "John Doe",
            "email" => "johndoe@example.com"
        ],
    ];

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_id'] = $user['username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
               header('Location: profile.php');
} else {
    // Login failed
    echo "Invalid username or password.";
}
?>
