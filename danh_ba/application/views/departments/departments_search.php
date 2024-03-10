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
    <title>Danh bạ đơn vị</title>
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
                            <a class="nav-link active" href="<?php echo isset($_POST['action']) && $_POST['action'] == "search_admin" ? "departments_admin.php" : "departments_regular.php"; ?>">Quản lý đơn vị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo isset($_POST['action']) && $_POST['action'] == "search_admin" ? "../../employees/employees_admin.php" : "../../employees/employees_regular.php"; ?>">Quản lý nhân viên</a>
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
                    <form action="departments_search.php" method="post">
                        <label>
                            <input type="hidden" name="action" value="search_admin">
                            <input class="form-control me-2" type="text" name="search" placeholder="Nhập thông tin tìm kiếm" size="30">
                        </label>
                        <button class="btn btn-primary" type="submit" name="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <div style="margin-top: 10px"></div>
                    <button class="buttonFunction" onclick=window.location.href='departments_add.php'>Thêm</button>
                    <button class="buttonFunction" onclick=window.location.href='departments_findid_edit.php'>Sửa</button>
                    <button class="buttonFunction" onclick=window.location.href='departments_findid_delete.php'>Xoá</button>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Mã đơn vị</th>
                            <th scope="col">Tên đơn vị</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Thư điện tử</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Website</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($departmentSearch as $department): ?>
                            <tr>
                                <td style="text-align: center"><?= $department['DepartmentID']?></td>
                                <td><?= $department['DepartmentName']?></td>
                                <td><?= $department['Address']?></td>
                                <td><?= $department['Email']?></td>
                                <td ><?= $department['Phone']?></td>
                                <td><?= $department['Logo']?></td>
                                <td><?= $department['Website']?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
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

