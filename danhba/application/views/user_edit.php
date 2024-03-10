<?php
require_once '../config.php';
require_once '../../application/model/User.php';
if (isset($_GET['Username'])) {
    $Username = $_GET['Username'];
}
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
        <h3 class="text-center ">Chỉnh sửa mật khẩu </h3>
        <?php if(isset($_GET['msg'])): ?>
            <div class="alert alert-success" role="alert">
                <?= $_GET['msg']?>
            </div>
        <?php endif; ?>
        <form action="../../application/functions/user_edit_process.php?Username=<?= $Username?>" method="post">            <div class="mb-3">
                <label for="username" class="form-label">Nhập mật khẩu cũ</label>
                <input type="password" class="form-control" id="password" name="Password_Old">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nhập mật khẩu mới</label>
                <input type="password" class="form-control" id="password1" name="Password1">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nhập lại mật khẩu mới</label>
                <input type="password" class="form-control" id="password2" name="Password2">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </body>
    </html>



