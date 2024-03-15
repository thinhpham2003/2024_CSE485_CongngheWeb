<?php
require_once '../../functions/getDepartments.php';
include '../../models/Employee.php';
$departments = getDepartments();

$items_per_page = 8;

$total_pages = ceil(count($departments) / $items_per_page);

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

$start = ($current_page - 1) * $items_per_page;
$end = $start + $items_per_page;

$departments_on_page = array_slice($departments, $start, $items_per_page);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh bạ đơn vị cho quản trị</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../public/assets/style/buttonFunctionStyle.css">
</head>
<body>
<div class="container_fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand text-primary" href="#">Danh bạ</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="departments_guest.php">Danh bạ đơn vị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../employees/employees_guest.php">Danh bạ nhân viên</a>
                        </li>
                    </ul>
                    <a href="../../../public/home/index.php" class="btn btn-primary">Đăng nhập</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        if (isset($_GET['mess'])):?>
            <div class="alert alert-success" role="alert">
                <?=$_GET['mess'];?>
            </div>
        <?php endif; ?>
        <h2 class="text-center text-primary">Danh bạ đơn vị</h2>
        <form class="d-flex" action="departments_search_admin.php" method="post" style="max-width: 400px;">
            <input class="form-control me-2" type="text" name="search" placeholder="Nhập thông tin tìm kiếm">
            <input type="hidden" name="action" value="search_admin">
            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <div style="margin-top: 15px"></div>
        <div class="container-fluid mt-4">
            <div class="row">
                <?php foreach ($departments_on_page as $department): ?>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="../../../public/assets/image/department-13.png" alt="" style="width:100px">
                                        <h5 class="font-size-14 mb-1"><?= $department['DepartmentName']?></h5>
                                        <span><?= $department['Address']?></span>
                                    </div>
                                </div>
                                <div class="mt-3 pt-1">
                                    <p class="text-muted mb-0"><i class="bi bi-bookmark-fill text-primary"></i> Mã đơn vị: <?= $department['DepartmentID']?></p>
                                    <p class="text-muted mb-0"><i class="bi bi-envelope-fill text-primary"></i> Email: <?= $department['Email']?></p>
                                    <p class="text-muted mb-0 mt-2"><i class="bi bi-phone-fill text-primary"></i> Điện thoại: <?= $department['Phone']?></p>
                                    <p class="text-muted mb-0 mt-2"><i class="bi bi-browser-chrome text-primary"></i> Website: <?= $department['Website']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container" style="margin-top: 20px">
            <ul class="pagination justify-content-center">
                <?php for ($page = 1; $page <= $total_pages; $page++): ?>
                    <li class="page-item <?php if ($current_page == $page) echo 'active'; ?>"><a class="page-link" href="?page=<?= $page ?>"><?= $page ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </main>
</div>
</body>
</html>
