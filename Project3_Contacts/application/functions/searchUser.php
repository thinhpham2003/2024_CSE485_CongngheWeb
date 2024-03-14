<?php
function userSearch($keyword)
{
    $conn = connectDB();
    $escaped_keyword = mysqli_real_escape_string($conn, $keyword); // Escape the keyword
    $sql = "SELECT * FROM users WHERE Username LIKE '%$escaped_keyword%' OR Password LIKE '%$escaped_keyword%' OR Role LIKE '%$escaped_keyword%' OR EmployeeID LIKE '%$escaped_keyword%'";
    $result = mysqli_query($conn, $sql);
    $department = [];
    while ($row = mysqli_fetch_assoc($result)){
        $department[] = $row;
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    return $department;
}
