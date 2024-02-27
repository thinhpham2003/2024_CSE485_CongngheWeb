<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <style>
        /* Style for the form */
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Form styles */
        .profile-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .profile-form h2 {
            margin-bottom: 20px;
        }

        .profile-form label {
            display: block;
            margin-bottom: 5px;
        }

        .profile-form input[type="text"],
        .profile-form input[type="email"],
        .profile-form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .profile-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .profile-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .profile-form .error-message {
            color: #dc3545;
            margin-bottom: 10px;
        }

        /* Link styles */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="profile-form">
        <?php
        include 'data.php';
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
        // ... add more levels
        ];
        session_start();
        if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
            header('Location: login.php');
        }
        $username = $_SESSION['user_id'];
        $user = null;
        // Retrieve user data based on username (use prepared statements in real DB)
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
            if ($authorization_levels[$user_role]['edit_profile']) {
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
        echo"<br>";
        echo"<a href='logout.php'>Log Out</a>";
        ?>
    <div>
</body>
</html>
