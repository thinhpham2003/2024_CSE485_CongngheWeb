<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
        header('Location: login.php');
    }
    $username = $_SESSION['user_id'];
    $user = null;
    // Retrieve user data based on username (use prepared statements in real DB)
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
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }
    if ($user) {
        // Display user information based on authorization level
        $user_role = $_SESSION['user_role'];
        echo "Welcome, " . $user['name'] . "!";
        echo "<br>Email: " . $user['email'];
        if ($authorization_levels[$user_role]) {
            echo "<br>Edit basic profile information (link)";
        }
        if ($user_role === "admin" &&
            $authorization_levels[$user_role]['access_admin_panel']) {
            echo "<br><a href='admin_panel.php'>Admin Panel</a>";
        }
        // ... display other information based on permissions
    } else {
        echo "Error: User not found.";

    }
    ?>
    <br>
    <a href="logout.php">LogOut</a>
</body>
</html>

