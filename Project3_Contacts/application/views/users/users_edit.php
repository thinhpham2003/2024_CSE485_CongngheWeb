<?php
require_once '../../config.php';
require_once '../../../application/models/User.php';
include '../../models/Employee.php';
session_start();
if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']))
{
    header("Location: ../../../public/home/index.php");
}
if (isset($_GET['username'])) {
    $Username = $_GET['username'];
}
$id = $_SESSION['user_id'];
$employee = getEmployeeById($id);
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
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../views/departments/departments_admin.php">Quản lý phòng ban</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../views/employees/employees_admin.php">Quản lý nhân viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="users_list.php">Quản lý người dùng</a>
                    </li>
                </ul>
            </div>
            <a href="../employees/my_profile.php"><button class="btn btn-primary me-3"><i class="bi bi-eye"></i> <?=$employee["FullName"]?></button> </a>
            <a href="../../functions/logout.php" class="btn btn-danger">Đăng xuất</a>
        </div>
    </nav>
</header>
<main class="mt-3">
    <div class="container">
        <h3 class="text-center text-primary">Chỉnh sửa thông tin người dùng</h3>
        <?php if(isset($_GET['mess'])): ?>
            <div class="alert alert-success" role="alert">
                <?= $_GET['mess']?>
            </div>
        <?php endif; ?>
        <form action="../../functions/editUser.php?username=<?= $Username?>" method="post">
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="role" class="form-label">Vai trò mới</label>
                <select class="form-select" id="role" name="Role">
                    <option value=""></option>
                    <option value="admin">Quản trị viên</option>
                    <option value="regular">Người dùng thông thường</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </body>
    </html>