<?php
//    session_start();
//    if (!isset($_COOKIE['logged_in'])) {
//          header("Location: ../../login.php");
//    }
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
                            <a class="nav-link active" aria-current="page" href="#">Departments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Employees</a>
                        </li>
                    </ul>
                    <!--<a href="my_profile.php"><button class="btn btn-primary me-3"><i class="bi bi-eye"></i> <?php //echo $user_employee["FullName"]; ?></button> </a>-->
                    <form class="d-flex" role="search" action="find.php" method="post">
                        <input class="form-control me-2" name='find' type="text" placeholder="Nhập tên, email, đơn vị đang công tác" '>
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h2 class="text-center">Thêm tài khoản người dùng</h2>
        <?php
        if (isset($_GET['err'])):?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['err'];?>
            </div>
        <?php endif; ?>
        <form action="../../functions/employees/process_employee_add.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên người dùng:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Address">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Thư điện tử:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số điện thoai:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="MobilePhone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Chức vụ:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Position">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ảnh đại diện:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Avatar">
            </div>
            <button type="submit" class="btn btn-primary">Thêm người dùng</button>
        </form>
    </main>
    <footer>

    </footer>
</div>
</body>
</html>
