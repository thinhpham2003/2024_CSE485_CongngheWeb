<?php
require_once 'config.php';
// Hàm kết nối database
function connectDB() {
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if (!$conn) {
        die("Kết nối database thất bại: " . mysqli_connect_error());
    }
    return $conn;
}
?>