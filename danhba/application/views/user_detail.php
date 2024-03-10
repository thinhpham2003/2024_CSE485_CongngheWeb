<?php
require_once 'functions.php';
$user_id = $_GET['id'];
$users = getUserInfor($user_id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<main class="mt-3">
    <div class="container">
        <h3 class="text-center ">Thông tin tài khoản người dùng</h3>
        <form action="user_edit_process.php" method="post">
            <div class="mb-3">
                <label for="user_id" class="form-label">id: </label>
                <?= $users['user_id'] ?>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Tên người dùng: </label>
                <?= $users['username'] ?>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Email: </label>
                <?= $users['email'] ?>
            </div>
        </form>
    </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </body>
    </html>



