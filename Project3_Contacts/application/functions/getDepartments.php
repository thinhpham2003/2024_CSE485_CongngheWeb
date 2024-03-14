<?php
require_once '../../database.php';
function getDepartments()
{
    $conn = connectDB();
    $sql = "SELECT * FROM departments";
    $result = mysqli_query($conn, $sql);
    $departments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $departments[] = $row;
    }
    mysqli_free_result($result);
    return $departments;
}