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
    $users =
        [
            ["username" => "johndoe",
                "password" => password_hash("password123", PASSWORD_DEFAULT),
                "name" => "John Doe",
                "email" => "johndoe@example.com"
            ],
        ];

    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
        header('Location: login.php'); // Redirect to login if not authenticated
    }
    $username = $_SESSION['user_id'];
    // Retrieve user data from array using the username
    $user = null;
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }
    if ($user) {
        // Display user information
        echo "Welcome, " . $user['name'] . "!";
        echo "<br>Email: " . $user['email'];
        // ... display other user details
    } else {
        echo "Error: User not found.";
    }
    ?>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
