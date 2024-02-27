<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit_user</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style for the form input */
        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for the form */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for the heading */
        h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Style for the link */
        a {
            color: #04AA6D;
            text-decoration: none;
        }

        /* Style for the link on hover */
        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
<?php
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
// ... add more users
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
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}
//find user data (use prepared statements in real DB)
function searchUserByName($users, $name) {
    foreach ($users as $user) {
        if ($user['name'] == $name) {
            return $user;
        }
    }
    return null;
}

// Sử dụng hàm
$user = searchUserByName($users, "John Doe");

if ($user) {
    echo "<h2>User data: </h2>";
    echo '<form method="post" action="">';
    echo 'Name: <input class ="form-input" type="text" name="name" value="' . $user['name'] . '"><br>';
    echo 'Email: <input class ="form-input" type="text" name="email" value="' . $user['email'] . '"><br>';
    echo 'Role: <input class ="form-input" type="text" name="role" value="' . $user['role'] . '"><br>';
    echo '</form>';
} else {
    echo "Không tìm thấy người dùng";
}

// Display user information and edit form
echo "<h2>Display user information: " . $user['name'] . "</h2>";
$user_to_edit = $users[0]; // Chọn người dùng đầu tiên trong mảng

echo '<form method="post" action="edit_user.php">';
echo 'Username: <input class ="form-input" type="text" name="name" value="' . $user_to_edit['username'] . '"><br>';
echo 'Password: <input class ="form-input" type="password" name="password" value="' . $user_to_edit['password'] . '"><br>';
echo 'Name: <input class ="form-input" type="text" name="name" value="' . $user_to_edit['name'] . '"><br>';
echo 'Email: <input class ="form-input" type="email" name="email" value="' . $user_to_edit['email'] . '"><br>';
echo 'Vai trò: <input class ="form-input" type="text" name="role" value="' . $user_to_edit['role'] . '"><br>';
echo '</form>';

// ... create a form to edit user details (consider security like input validation)
echo "<h2>Edit User: " . $user['name'] . "</h2>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Update user details
        foreach ($users as &$user) {
            if ($user["username"] == $username) {
                $user["name"] = $name;
                $user["email"] = $email;
                $user["role"] = $role;
                break;
            }
        }
    }
}
// Save edited user information (implement validation and error handling)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        // Update user details
        foreach ($users as &$user) {
            if ($user["username"] == $username) {
                $user["name"] = $name;
                $user["email"] = $email;
                $user["role"] = $role;
                echo "User details updated successfully!";
                break;
            }
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input class ="form-input" type="text" name="username"><br>
    Name: <input class ="form-input" type="text" name="name"><br>
    password: <input class ="form-input" type="password" name="password"><br>
    Email: <input class ="form-input" type="text" name="email"><br>
    Role: <input class ="form-input" type="text" name="role"><br>
    <input class ="form-input" type="submit" value=" cập nhật"><br>
</form>
<a href="logout.php">Log Out</a>
</body>
</html>