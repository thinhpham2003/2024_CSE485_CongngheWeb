<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../assets/style/login.css" />
</head>
<body>
<div class="container">
    <div class="center">
        <h1>Đăng nhập</h1>
        <form action="../../application/functions/login.php" method="POST">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Tên người dùng</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Mật khẩu</label>
            </div>
            <input name="submit" type="Submit" value="Đăng nhập">
            <div class="signup_link">
                <a href="../../application/views/departments/departments_guest.php">Đăng nhập với tài khoản Khách</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>