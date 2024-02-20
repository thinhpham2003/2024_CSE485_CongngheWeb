<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="indexcss.css">
    <style>

    </style>
</head>
<body>

<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
echo '<nav><ul>';
echo '<li style="padding-left: 15px" ><i class="fa fa-home"></i></li>';
foreach ($navItems as $item) {
    echo "<li><a href='#'>$item</a></li>";
}
echo '</ul></nav>';
?>

</body>
</html>
