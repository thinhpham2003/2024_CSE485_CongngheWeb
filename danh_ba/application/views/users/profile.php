<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: ../functions/login.php'); // Redirect to login if not authenticated
}
$username = $_SESSION['user_id'];

$db = new mysqli('localhost', 'root', '', 'phone_number');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$query = $db->prepare("SELECT * FROM users WHERE Username = ?");
$query->bind_param('s', $username);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_assoc();

if ($user) { ?>
    <div class="container">
        <h5 class="text-center my-3">Thông tin tài khoản của bạn</h5>
        <form action="../../functions/editUser.php" method="post">
            <div >
                <img src="https://as2.ftcdn.net/v2/jpg/03/03/62/45/1000_F_303624505_u0bFT1Rnoj8CMUSs8wMCwoKlnWlh5Jiq.jpg" style="width: 150px">
            </div>
            <div class="form-floating my-3">
                <input type="text" value="<?= $user['Username'] ?>" class="form-control" id="Username" name="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="text" value="<?= $user['Role'] ?>" class="form-control" id="Role" name="Role">
                <label for="floatingPassword">Role</label>
            </div>
            <div>
                <a href="users_edit.php?Username=<?= $user['Username'] ?>"
                   class="btn btn-warning my-3"><i class="bi bi-pencil-fill"></i></a>
            </div>
        </form>
    </div>
    <?php
} else {
    echo "Error: User not found.";
}
    ?>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>

