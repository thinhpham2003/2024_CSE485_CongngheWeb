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
function addEmployee($name, $address, $email, $MobilePhone, $Position, $Avatar) {
    $conn = connectDB();
    $sql = "SELECT * FROM employees WHERE Email = '".$email."' OR MobilePhone='".$MobilePhone."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0){
        mysqli_close($conn);
        return false;
    }else {
        $sql1 = "INSERT INTO employees(FullName,Address,Email,MobilePhone,Position, Avatar) VALUES ('" . $name . "','" . $address . "','" .$email . "','" .$MobilePhone . "','" .$Position . "','" . $Avatar . "')";
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



function isEmployeeExist($id) {
    $conn = connectDB();
    $sql = "SELECT COUNT(*) FROM employees WHERE employeeID = {$id}";
    $result = mysqli_query($conn, $sql);
    return ($result)?true:false;
}

function updateEmployee($id, $name, $address, $email, $MobilePhone, $Position, $Avatar)
{
    $conn = connectDB();
        $sql1 = "UPDATE employees SET FullName = '" . $name . "', Address = '" . $address . "', email = '" . $email . "', MobilePhone = '" . $MobilePhone . "', Avatar = '" . $Avatar . "' WHERE EmployeeID ='" . $id . "'";
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
    //SELECT * FROM employees WHERE fullName LIKE "%4%" OR mobilePhone LIKE "%4%" OR departmentID IN (SELECT departmentID FROM departments WHERE departmentID LIKE "%4%")
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
