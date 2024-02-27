<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<?php

$navItems = [
    "GIỚI THIỆU" => ["Tổng quan","Cơ sở vật chất"],
    "TIN TỨC & THÔNG BÁO" => ["Tin tức", "Thông báo"],
    "TUYỂN SINH" => [],
    "ĐÀO TẠO" => [],
    "NGHIÊN CỨU" => ["Nghiên cứu khoa học"],
    "ĐỐI NGOẠI" => [],
    "VĂN BẢN" => ["Văn bản hướng dẫn"],
    "SINH VIÊN" => [],
    "LIÊN HỆ" => []
];
echo '<nav><ul>';
echo '<li><i class="fas fa-home" style="color: white"></i></li>';
foreach ($navItems as $key => $value) {
    echo "<li class='item'><a>$key</a>";
    if (count($value) > 0) {
        echo "<ul class='sub-menu'>";
        foreach ($value as $subItem) {
            echo "<li><a>$subItem</a></li>";
        }
        echo "</ul>";
    }
    echo "</li>";
}
echo '</ul></nav>';
?>
</body>
</html>