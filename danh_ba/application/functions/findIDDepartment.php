<?php
require_once '../database.php';
require_once 'deleteDepartment.php';
$conn = connectDB();
$departmentID = $_POST['departmentID'];

$sql = "SELECT * FROM departments";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['DepartmentID'] == $departmentID) {
            if(isset($_GET['action']) && $_GET['action']=='findid_edit')
            {
                header("Location:../views/departments/departments_edit.php?id=$departmentID");
                exit();
            }
            else if(isset($_GET['action']) && $_GET['action']=='findid_delete')
            {
                deleteDepartment($departmentID);
                header("Location:../views/departments/departments_admin.php?mess=Xoá thành công");
                exit();
            }
        }
    }
}

header("Location:../views/departments/departments_findid_edit.php?error=true");
mysqli_close($conn);
?>
