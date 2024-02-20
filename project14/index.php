<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>

<form method="post" action="process_form.php">
    <h2>Basic Info</h2>
    <div>
        <label class="form-label" for="employee_id">Employee ID: </label> <input class="form-input" id = "employee_id"  type="text" name="employee_id"><br>
    </div>
    <div>
        <label class="form-label" for="last_name">Last Name: </label> <input class="form-input" id = "last_name" type="text" name="last_name"><br>
    </div>
    <div>
        <label class="form-label" for="first_name">First Name: </label> <input class="form-input" id = "first_name" type="text" name="first_name"><br>
    </div>

    <div>
        <?php
        $genderOption = ['Male', 'Female', 'XXX', 'YYY'];
        echo '<label class="form-label">Gender: </label>';
        foreach ($genderOption as $gender){
            echo '<div class="form-control">';
            echo "<input type='radio' name='gender' value='$gender'>";
            echo "<label>$gender</label>";
            echo '</div>';
        }
        ?>

<!--        <label class="form-label" >Gender: </label>-->
<!--        <div class="form-control">-->
<!--            <input type="radio" name="gender" value="male">-->
<!--            <label>Male</label>-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <input type="radio" name="gender" value="female">-->
<!--            <label>Female</label>-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <input type="radio" name="gender" value="xxx">-->
<!--            <label>XXX</label>-->
<!--        </div>-->
<!--        <div class="form-control">-->
<!--            <input type="radio" name="gender" value="zzz">-->
<!--            <label>ZZZ</label>-->
<!--        </div>-->
    </div>

    <div>
        <label class="form-label" for="title">Title: </label> <input class="form-input" id = "title" type="text" name="title"><br>
    </div>
    <div>
        <label class="form-label" for="suffix">Suffix: </label> <input class="form-input" id = "suffix" type="text" name="suffix"><br>
    </div>
    <div>
        <label class="form-label" for="birthdate">BirthDate: </label> <input class="form-input" id = "birthdate" type="date" name="birthdate"><br>
    </div>
    <div>
        <label class="form-label" for="hiredate">HireDate: </label> <input class="form-input" id = "hiredate" type="date" name="hiredate"><br>
    </div>
    <div>
        <label class="form-label" for="ssn">SSN # (if applicable): </label> <input class="form-input" id = "ssn" type="text" name="ssn"><br>
    </div>
    <div>
        <?php
        $reportsToOptions = ['Buchanan', 'Davolio', 'Fuller', 'Leverling', 'Peacock'];
        echo 'Reports To: <select name="reports_to">';
        foreach ($reportsToOptions as $option) {
            echo "<option value='$option'>$option</option>";
        }
        echo '</select><br>';
        ?>
    </div>

    <h2>Contact Info
        <div>
            <label class="form-label" for="email">Email: </label> <input class="form-input" id = "email" type="email" name="email"><br>
        </div>
        <div>
            <label class="form-label" for="address">Address: </label> <input class="form-input" id = "email" type="text" name="address"><br>
        </div>
        <div>
            <label class="form-label" for="City">Email: </label> <input class="form-input" id = "city" type="text" name="city"><br>
        </div>
        <div>
            <label class="form-label" for="region">Region: </label> <input class="form-input" id = "region" type="text" name="region"><br>
        </div>
        <div>
            <label class="form-label" for="ssn">Email: </label> <input class="form-input" id = "email" type="text" name="email"><br>
        </div>
        <div>
            <label class="form-label" for="ssn">Email: </label> <input class="form-input" id = "email" type="text" name="email"><br>
        </div>
    City: <input class="form-input" type="text" name="city"><br>
    Region: <input class="form-input" type="text" name="region"><br>
    Postal Code: <input class="form-input" type="text" name="postal_code"><br>
    Country: <input class="form-input" type="text" name="country"><br>
    US Home Phone: <input class="form-input" type="tel" name="us_home_phone"><br>
    Photo: <input class="form-input" type="file" name="photo"><br>

    <input class="form-input" type="submit" value="Submit">
</form>
</body>
</html>
