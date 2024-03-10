<?php
require_once '../../database.php';
function getDepartmentByID($departmentID)
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments WHERE departmentID = $departmentID";
    $result = mysqli_query($conn, $sql);
    $department = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $department;
}