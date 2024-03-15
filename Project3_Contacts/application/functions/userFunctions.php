<?php
function getAllUsers(){
    $conn = mysqli_connect('localhost', 'root', '', 'phone_number');
    if (!$conn) {
        die('Không thể kết nối');
    }
    $sql = "SELECT * FROM users ORDER BY username ASC";
    $result = mysqli_query($conn, $sql);
    $users = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }
    mysqli_close($conn);
    return $users;
}