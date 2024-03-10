<?php
session_start();
$Username = $_POST['Username'];
$Password = $_POST['Password'];

echo $Password;
echo $Username;
// Kết nối với cơ sở dữ liệu
$db = new mysqli('localhost', 'root', '', 'quanlydanhba');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Truy vấn cơ sở dữ liệu
$query = $db->prepare("SELECT * FROM users WHERE Username = ? ");
$query->bind_param('s', $Username);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_assoc();

//if ($user && $Password== $user['Password'] && $user['Role'] == 'regula') {
//    // Login successful
//    $_SESSION['user_id'] = $user['Username']; // Store user ID in session
//    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
//    header('Location: ../../../public/home/index.php');

if ($user && $Password== $user['Password'] && $user['Role'] == 'regular'){
    $_SESSION['user_id'] = $user['Username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
    header('Location: ../../../public/home/index.php');
}
else {
    // Login failed
    echo "Không đúng mk";
}
?>