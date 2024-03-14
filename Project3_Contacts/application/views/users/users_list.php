<?php
require_once '../../models/User.php';
include '../../models/Employee.php';
session_start();

if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']))
{
    header("Location: ../../../public/home/index.php");
}
$id = $_SESSION['user_id'];
$employee = getEmployeeById($id);

$users = getAllUsers();
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$itemsPerPage = 10;
$totalPages = ceil(count($users) / $itemsPerPage);
$currentPageItems = array_slice($users, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

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
        <?php if(isset($_GET['mess'])): ?>
            <div class="alert alert-success" role="alert">
                <?= $_GET['mess']?>
            </div>
        <?php endif; ?>
        <h2 class="text-center text-primary">Danh sách người dùng</h2>
        <form class="d-flex" action="users_search.php" method="post" style="max-width: 400px;">
            <input class="form-control me-2" name='search' type="text" placeholder="Nhập thông tin tìm kiếm">
            <button class="btn btn-primary" type="submit" style="padding: 5px 10px;"><i class="bi bi-search" style="font-size: 18px;"></i></button>
        </form>
        <a href="users_add.php" class="btn btn-primary" style="margin-top: 15px">Thêm mới</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Vai trò</th>
                <th scope="col" class="text-center" >Mật khẩu</th>
                <th scope="col" class="text-center" >Mã nhân viên</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xoá</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0 ?>
            <?php foreach ($currentPageItems as $user): ?>
                <tr>
                    <th><?= ++$i ?></th>
                    <td><?= $user['Username'] ?></td>
                    <td><?= $user['Role'] ?></td>
                    <td class="text-center"><?= $user['Password'] ?></td>
                    <td class="text-center" ><?= $user['EmployeeID'] ?></td>
                    <td>
                        <a href="users_edit.php?username=<?= $user['Username'] ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                    </td>
                    <td>
                        <a href="../../functions/deleteUser.php?username=<?= $user['Username'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <ul class="pagination">
            <?php if ($currentPage > 1): ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a></li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $currentPage): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php else: ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a></li>
            <?php endif; ?>
        </ul>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </body>
    </html>