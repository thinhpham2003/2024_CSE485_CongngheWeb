<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css2.css">
    <title>Bài 2</title>
</head>
<body>

</body>
</html>
<?php
    $user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.png" // Initial avatar URL
    ];
?>
<form action="bai2.php" method="post" enctype="multipart/form-data">
    <h2>Profile Information</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"
           required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>"
           disabled>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Update Profile</button>
</form>
