<?php
include '../../models/Employee.php';
include '../../functions/getDepartmentByID.php';
include '../../functions/getDepartments.php';
session_start();
if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
    header("Location: ../../../public/home/index.php");
}
$id = $_SESSION['user_id'];
$role = $_SESSION['user_role'];
$employee = getEmployeeById($id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container_fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Danh bạ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../departments/<?php echo ($role == 'admin') ? 'departments_admin.php' : 'departments_regular.php'; ?>">Danh bạ đơn vị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo ($role == 'admin') ? 'employees_admin.php' : 'employees_regular.php'; ?>">Danh bạ nhân viên</a>
                        </li>
                    </ul>
                    <a href="my_profile.php"><button class="btn btn-primary me-3"><i class="bi bi-eye"></i> <?=$employee["FullName"]?></button> </a>
                    <a href="../../functions/logout.php" class="btn btn-danger">Đăng xuất</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1 class="text-center">Tài khoản của tôi</h1>
        <form class="ms-5 me-5">
            <?php
            if (isset($_GET['mess'])):?>
                <div class="alert alert-success" role="alert">
                    <?=$_GET['mess'];?>
                </div>
            <?php endif; ?>
                <div class="d-flex justify-content-center"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md rounded-circle img-thumbnail" style="width: 250px" /></div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Id:</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="<?=$employee['EmployeeID']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Tên nhân viên:</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="<?=$employee['FullName']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Địa chỉ:</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="<?=$employee['Address']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Thư điện tử:</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="<?=$employee['Email']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Số điện thoại:</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="<?=$employee['MobilePhone']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Chức vụ:</label>
                    <input type="text" id="disabledTextInput" class="form-control" value="<?=$employee['Position']?>" readonly>
                </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Đơn vị:</label>
                <input type="text" id="disabledTextInput" class="form-control" value="<?=getDepartmentByID($employee['DepartmentID'])['DepartmentName']?>" readonly>
            </div>
        </form>
        <a href="employees_edit.php?id=<?=$employee['EmployeeID']?>"><button class="btn btn-primary ms-5"><i class="bi bi-pencil"></i>Cập nhật</button></a>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>

