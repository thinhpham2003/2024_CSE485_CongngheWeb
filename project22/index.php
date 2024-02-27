<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $user = [
            "id" => 1,
            "name"=>"Thu Hang",
            "email" =>"nguyenthuhang123@gmail.com",
            "avatar" =>"<img class='images' src='images/bag.png'>"
        ];
    ?>
    <form action="upload_profile.php" method="post" class="form" id="form-1" enctype="multipart/form-data">
        <h3>Account settings</h3>
        <label for="avatar">Avatar:</label>

        <input type="file" name="avatar" accept="image/*">
        <br>
        <button class="form-submit-avatar" type="submit">Change my avatar</button>
        <div class = "form-group">
            <label for="fullname" class="form-lable">Full name:</label>
            <input id ="fullname" class="form-a" name="fullname" value="<?php echo $user['name']?>" type="text" placeholder="Fullname..">
            <span class="form-message"></span>
        </div>
        <div class = "form-group">
            <label for="email" class="form-lable">Email: </label>
            <input id ="email" class="form-a"  name="email" value="<?php echo $user['email']?>" type="text" placeholder="Email..">
            <span class="form-message"></span>
        </div>
        <div class = "form-group">
            <label for="phone" class="form-lable">Phone number: </label>
            <input id ="phone" class="form-a" name="phone"  type="tel" placeholder="phone..">
            <span class="form-message"></span>
        </div>
        <div class = "form-group">
            <label for="company" class="form-lable">Company name: </label>
            <input id ="company" class="form-a" name="company" type="text" placeholder="company..">
            <span class="form-message"></span>
        </div>
        <button class="form-submit" type="submit">Update Profile</button>
    </form>


</body>
</html>
