<!doctype html>
<html lang="en">
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include 'data.php';
echo '<nav><ul>';
echo '<li><a href="https://www.tlu.edu.vn/"><i class="fas fa-home"></a></i></li>';
foreach ($navItems as $item) {
    echo "<li><a href='#'>$item</a></li>";
}
echo '</ul></nav>';
?>
</body>
</html>





