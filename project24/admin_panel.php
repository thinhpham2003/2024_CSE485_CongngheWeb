<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #007bff;
            color: #fff;
            text-align: left;
        }

        table td {
            background-color: #fff;
        }

        /* Link styles */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Logout button */
        .logout-button {
            display: block;
            width: 100px;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="container" >
        <?php
        include 'data.php';
        session_start();
        if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
            $_SESSION['user_role'] !== "admin") {
            header('Location: login.php');
        }
        // ... display admin panel content
        // List users (implement pagination or filtering if needed)
        echo "<h2>Users</h2>";
        echo "<table border='1'>";
        echo
        "<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
        foreach ($users as $u) {
            echo "<tr>";
            echo "<td>" . $u['username'] . "</td>";
            echo "<td>" . $u['name'] . "</td>";
            echo "<td>" . $u['email'] . "</td>";
            echo "<td>" . $u['role'] . "</td>";
            echo "<td>";
            // Edit user link (consider using a separate page for editing)
            if ($u['username'] !== $_SESSION['user_id']) { // Prevent self-editing
                echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a class='logout-button' href='logout.php'>Log Out</a>";
        ?>
    <div>
</body>
</html>
