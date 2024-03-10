<?php
include '../../models/Employee.php';
$employees = getEmployees();
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
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <div class="container mt-4" >
            <div class="row">
                <?php foreach ($employees as $e): ?>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md rounded-circle img-thumbnail" /></div>
                                    <div class="flex-1 ms-3">
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?= $e['fullName']?></a></h5>
                                        <span><?= $e['position']?></span>
                                    </div>
                                </div>
                                <div class="mt-3 pt-1">
                                    <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i> <?= $e['mobilePhone']?></p>
                                    <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i> <?= $e['email']?></p>
                                    <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i><?= $e['address']?></p>
                                </div>
                                <div class="d-flex gap-2 pt-4">
                                    <a href="employees_profile.php?id=<?= $e["employeeID"] ?>"><button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</button></a>
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
