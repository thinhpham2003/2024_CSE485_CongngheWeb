<?php

require_once '../../functions/deleteUser.php';
include '../../models/Employee.php';
session_start();
if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']))
{
    header("Location: ../../../public/home/index.php");
}
$id = $_SESSION['user_id'];
$employee = getEmployeeById($id);
