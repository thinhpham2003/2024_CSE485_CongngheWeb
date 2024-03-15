<?php
require_once "../../database.php";
function getEmployees()
{
    $conn = connectDB();
    $sql = "SELECT * FROM employees";
    $result = mysqli_query($conn, $sql);
    $employees = [];
    if (mysqli_num_rows($result) >0){
        while ($row = mysqli_fetch_assoc($result)){
            $employees[] = $row;
        }
    }
    mysqli_close($conn);
    return $employees;
}

//Lay ra ng dung theo id
function getEmployeeById($id) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE EmployeeID = '".$id."';";
    $result = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $employee;
}
function addEmployee($name, $address, $email, $MobilePhone, $Position, $DepartmentID, $Avatar) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE Email = '".$email."' OR MobilePhone='".$MobilePhone."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0){
        mysqli_close($conn);
        return false;
    }else {
        $sql1 = "INSERT INTO employees(FullName,Address,Email,MobilePhone,Position, Avatar, DepartmentID) VALUES ('" . $name . "','" . $address . "','" .$email . "','" .$MobilePhone . "','" .$Position . "','" . $Avatar . "','".$DepartmentID."')";
        echo $sql1;
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            return false;
        }
    }
}

function deleteEmployee($id)
{
    $conn = connectDB();
    $sql = "DELETE FROM employees WHERE employeeID = {$id}";
    $result = mysqli_query($conn, $sql);
    if ($result){
        mysqli_close($conn);
        return true;
    }else{
        mysqli_close($conn);
        return false;
    }
}

function isEmployeeExist($id) {
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM employees WHERE employeeID = {$id}";
    $result = mysqli_query($conn, $sql);
    return ($result)?true:false;
}

function updateEmployee($id, $name, $address, $email, $MobilePhone, $Position,$DepartmentID, $Avatar)
{
    $conn = connectDB();
        $sql1 = "UPDATE employees SET FullName = '" . $name . "', Address = '" . $address . "', email = '" . $email . "', MobilePhone = '" . $MobilePhone . "', Position = '" .$Position. "', DepartmentID = '" .$DepartmentID. "', Avatar = '" . $Avatar . "' WHERE EmployeeID ='" . $id . "'";
        //echo $sql1;
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            return false;
        }
}

function searchEmployees($keyword) {
    $conn = connectDB();
    $keyword = "'%$keyword%'";
    $sql = "SELECT * FROM employees WHERE fullName LIKE {$keyword} OR email LIKE {$keyword} OR departmentID IN  (SELECT departmentID FROM departments WHERE DepartmentName LIKE {$keyword})";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    $employees = [];
    if (mysqli_num_rows($result) >0){
        while ($row = mysqli_fetch_assoc($result)){
            $employees[] = $row;
        }
    }
    mysqli_close($conn);
    return $employees;
}


?>
