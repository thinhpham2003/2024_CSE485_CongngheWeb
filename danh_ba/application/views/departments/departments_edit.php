<?php
require_once '../../functions/getDepartmentByID.php';
include '../../models/Employee.php';
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: ../../../../public/home/index.php');
}
$departmentID = $_GET['id'];
$department = getDepartmentByID($departmentID);
if ($department) {
    $departmentName = $department['DepartmentName'];
    $address = $department['Address'];
    $email = $department['Email'];
    $phone = $department['Phone'];
    $logo = $department['Logo'];
    $website = $department['Website'];
} else {
    header("Location: departments_findid.php?error=true");
    exit();
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
    <link rel="stylesheet" href="../assets/style.css">
    <title>Sửa thông tin đơn vị</title>
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
                            <a class="nav-link active" href="departments_admin.php">Quản lý đơn vị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../employees/employees_admin.php">Quản lý nhân viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../users/users_list.php">Quản lý người dùng</a>
                        </li>
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
                    <h2 class="text-center text-primary">Sửa thông tin đơn vị</h2>
                    <table class="table">
                        <form action="../../functions/editDepartment.php?id=<?=$departmentID?>" method="post">
                            <div class="form-group">
                                <label for="username">Tên đơn vị</label>
                                <input type="text" name="departmentName" class="form-control" required value="<?= $departmentName ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" required value="<?= $address ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Thư điện tử</label>
                                <input type="text" name="email" class="form-control" required value="<?= $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" required value="<?= $phone ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Logo</label>
                                <input type="text" name="logo" class="form-control" required value="<?= $logo ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Website</label>
                                <input type="text" name="website" class="form-control" required value="<?= $website ?>">
                            </div>
                            <button type="submit" class="form-control" style="margin-top: 30px">Sửa</button>
                        </form>
                    </table>
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