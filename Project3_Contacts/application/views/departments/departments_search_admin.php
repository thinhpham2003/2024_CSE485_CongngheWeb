<?php
require_once '../../functions/searchDepartment.php';
include '../../models/Employee.php';
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: ../../../public/home/index.php');
}
if(isset($_POST['search'])) {
    $keyword = $_POST['search'];
    $departmentSearch = departmentSearch($keyword);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../public/assets/style/buttonFunctionStyle.css">
    <link rel="stylesheet" href="../../../public/assets/style/paginationStyle.css">
    <title>Tìm kiếm đơn vị</title>
</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= isset($_POST['action']) && $_POST['action'] == "search_admin" ? "departments_admin.php" : "departments_regular.php"; ?>">Quản lý đơn vị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= isset($_POST['action']) && $_POST['action'] == "search_admin" ? "../../views/employees/employees_admin.php" : "../../employees/employees_regular.php"; ?>">Quản lý nhân viên</a>
                        </li>
                        <?php
                        if(isset($_POST['action']) && $_POST['action'] == "search_admin"):?>
                            <li class="nav-item">
                                <a class="nav-link" href="../users/users_list.php">Quản lý người dùng</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <a href="../employees/my_profile.php"><button class="btn btn-primary me-3"><i class="bi bi-eye"></i> <?=$employee["FullName"]?></button> </a>
                    <a href="../../functions/logout.php" class="btn btn-danger">Đăng xuất</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="col-md">
                    <h2 class="text-center text-primary">Danh bạ đơn vị</h2>
                    <form class="d-flex" action="departments_search_admin.php" method="post" style="max-width: 400px;">
                        <input class="form-control me-2" type="text" name="search" placeholder="Nhập thông tin tìm kiếm">
                        <input type="hidden" name="action" value="search_admin">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <div style="margin-top: 15px"></div>
                    <button class="btn btn-primary" onclick=window.location.href='departments_add.php'>Thêm mới</button>
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <?php foreach ($departmentSearch as $department): ?>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="../../../public/assets/image/department-13.png" alt="" style="width:150px" class="avatar-md rounded-circle img-thumbnail  small-image">
                                                    <h5 class="font-size-14 mb-1"><?= $department['DepartmentName']?></h5>
                                                    <span><?= $department['Address']?></span>
                                                </div>
                                            </div>
                                            <div class="mt-3 pt-1">
                                                <p class="text-muted mb-0"><i class="bi bi-person-badge-fill text-primary"> </i><?= $department['DepartmentID']?></p>
                                                <p class="text-muted mb-0"><i class="bi bi-envelope-fill text-primary"> </i><?= $department['Email']?></p>
                                                <p class="text-muted mb-0 mt-2"><i class="bi bi-telephone-fill text-primary"> </i><?= $department['Phone']?></p>
                                                <p class="text-muted mb-0 mt-2"><i class="bi bi-server text-primary"> </i><?= $department['Website']?></p>
                                            </div>
                                            <div class=" gap-2 pt-4">
                                                <a href="departments_edit.php?id=<?= $department['DepartmentID']?>" class="btn btn-warning btn-sm w-50"><i class="bi bi-pencil-fill"></i> Sửa</a>
                                                <a href="../../functions/deleteDepartment.php?id=<?= $department['DepartmentID']?>" class="btn btn-danger btn-sm w-50" onclick="return confirm('Bạn có chắc chắn muốn xoá đơn vị này không?')"><i class="bi bi-trash3-fill"></i> Xoá</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

