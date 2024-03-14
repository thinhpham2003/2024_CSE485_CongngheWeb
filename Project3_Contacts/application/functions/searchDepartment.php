<?php
require_once '../../database.php';
function departmentSearch($keyword)
{
    $conn = connectDB();
    $escaped_keyword = mysqli_real_escape_string($conn, $keyword); // Escape the keyword
    $sql = "SELECT * FROM departments WHERE DepartmentID LIKE '%$escaped_keyword%' OR DepartmentName LIKE '%$escaped_keyword%' OR Email LIKE '%$escaped_keyword%' OR Phone LIKE '%$escaped_keyword%'";
    $result = mysqli_query($conn, $sql);
    $department = [];
    while ($row = mysqli_fetch_assoc($result)){
        $department[] = $row;
    }
    mysqli_free_result($result);
    return $department;
}