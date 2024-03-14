<?php
include '../database.php';
function deleteEmployee($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM employees WHERE employeeID = {$id}";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Lỗi khi xóa bộ phận: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
    return $result;
}

$employee_id = $_GET['id'];

if (deleteEmployee($employee_id)) {
    header('Location: ../views/employees/employees_admin.php?mess=Đã xoá nhân viên thành công.');
} else {
    header('Location: ../views/employees/employees_admin.php?mess=Có lỗi xảy ra khi xoá nhân viên.');
}