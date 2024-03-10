<?php
require_once '../config.php';
require_once '../../application/model/User.php';
$users = getAllUsers();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Danh sach user</title>
</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Vietnamnet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Quản trị department</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản trị employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản trị user</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-md">
                    <h2 class="text-center text-primary">Thông tin tài khoản </h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">EmployeeID</th>
                            <th scope="col" colspan="4" class="text-center">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0 ?>
                        <?php foreach($users as $key => $user): ?>
                            <tr>
                                <td><?= $user['Username']?></td>
                                <td><?= $user['Password']?></td>
                                <td><?= $user['Role']?></td>
                                <td><?= $user['EmployeeID']?></td>
                                <td>
                                    <a href="../views/user_detail.php?id=<?= $user['EmployeeID'] ?>" class="btn btn-primary "><i class="bi bi-eye-fill"></i></a>
                                </td>
                                <td>
                                    <a href="../views/user_edit.php?id=<?= $user['EmployeeID'] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                </td>
                                <td>
                                    <a href="../views/user_delete.php?id=<?= $user['EmployeeID'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

