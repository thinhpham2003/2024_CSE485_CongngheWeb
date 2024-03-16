<?php
include '../../models/Employee.php';
if (!$_SERVER['REQUEST_METHOD'] == "POST"){
    header("index.php?mess=Không có thông tin tìm kiếm");
}
if(!empty($_POST['find'])) {
    $keyword = $_POST['find'];
    $employees = searchEmployees($keyword);
} else {
    header("Location: index.php?mess=Không có thông tin tìm kiếm");
    exit();
}
$items_per_page = 8;
$total_pages = ceil(count($employees) / $items_per_page);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($current_page - 1) * $items_per_page;
$end = $start + $items_per_page;
$employees_on_page = array_slice($employees, $start, $items_per_page);

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tìm kiếm nhân viên</title>
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
                                <a class="nav-link" aria-current="page" href="../departments/departments_guest.php">Danh bạ đơn vị</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="employees_guest.php">Danh bạ nhân viên</a>
                            </li>
                        </ul>
                        <a href="../../../public/home/index.php" class="btn btn-primary">Đăng nhập</a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <h2 class="text-center text-primary">Danh bạ nhân viên</h2>
            <form class="d-flex" role="search" action="employees_search_guest.php" method="post" style="max-width: 400px;">
                <input class="form-control me-2" name='find' type="text" placeholder="Nhập thông tin tìm kiếm">
                <button class="btn btn-primary" type="submit" style="padding: 5px 10px;"><i class="bi bi-search" style="font-size: 18px;"></i></button>
            </form>
            <div class="container-fluid mt-4 " >
                <div class="row">
                    <?php foreach ($employees as $e):
                        ?>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <?php
                                        $employeeAvatarPath = "../../../public/assets/image/employees_avatar/employee_avatar_{$e['FullName']}.jpg";
                                        $defaultAvatarPath = "../../../public/assets/image/employees_avatar/employee_avatar_default.jpg";
                                        $avatarPath = file_exists($employeeAvatarPath) ? $employeeAvatarPath : $defaultAvatarPath;
                                        ?>
                                        <img src="<?= $avatarPath ?>" alt="" style="width:150px" class="avatar-md rounded-circle img-thumbnail  small-image">
                                        <div class="flex-1 ms-3">
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?= $e['FullName']?></a></h5>
                                            <span><?= $e['Position']?></span>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-1">
                                        <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> <?= $e['MobilePhone']?></p>
                                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> <?= $e['Email']?></p>
                                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i><?= $e['Address']?></p>
                                    </div>
                                    <div class=" gap-2 pt-4">
                                        <a href="profile.php?id=<?= $e["EmployeeID"]?>"><button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Thông tin</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </main>
        <footer>

        </footer>
    </div>
    </body>
    </html>
<?php
