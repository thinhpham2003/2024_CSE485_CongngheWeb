<?php
require_once '../database.php';

function deleteEmployeesInDepartment($departmentID) {
    $conn = connectDB();

    $sql = "DELETE u FROM users u JOIN employees e ON u.EmployeeID = e.EmployeeID WHERE e.DepartmentID = $departmentID";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Lỗi khi xóa người dùng: ' . mysqli_error($conn));
    }

    $sql = "DELETE FROM employees WHERE DepartmentID = $departmentID";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Lỗi khi xóa nhân viên: ' . mysqli_error($conn));
    }
    mysqli_close($conn);
}

function deleteDepartment($departmentID) {
    $conn = connectDB();

    $sql = "SELECT DepartmentID FROM departments WHERE ParentDepartmentID = $departmentID";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $childDepartmentID = $row['DepartmentID'];
            deleteDepartment($childDepartmentID);
        }
    }

    deleteEmployeesInDepartment($departmentID);

    $sql = "DELETE FROM departments WHERE DepartmentID = $departmentID";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Lỗi khi xóa bộ phận: ' . mysqli_error($conn));
    }

    mysqli_close($conn);
    return $result;
}


$department_id = $_GET['id'];

if (deleteDepartment($department_id)) {
    header('Location: ../views/departments/departments_admin.php?mess=Đã xoá đơn vị thành công.');
} else {
    header('Location: ../views/departments/departments_admin.php?mess=Có lỗi xảy ra khi xoá đơn vị.');
}


?>
