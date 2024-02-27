<?php
    include "data.php";
    if (!empty($_GET["change"]) ){
        $img = $_GET['change'];
    }else{
        $img = "md.png";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles.css" rel="stylesheet">
    <title>Project22</title>
</head>
<body>
<form action="update_profile.php" method="post" enctype="multipart/form-data">
    <div class = "avatar">
        <img src="<?php echo $img; ?>" alt="">
    </div>
    <h2>Profile Information</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Update Profile</button>

</form>
</body>
</html>
