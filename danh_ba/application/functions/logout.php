<?php

session_start();
session_regenerate_id(true);
session_destroy();
setcookie('logged_in', "", 1, "/", true, true, true);
header('Location: ../../public/home/index.php');
