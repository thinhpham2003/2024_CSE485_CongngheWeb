<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="indexcss.css">
</head>
<body>

<form method="post" action="process_form.php">
    <h2>Basic Info</h2><hr>

    <div class="form-group">
        <label class="form-label" for="employee_id">Employee ID: </label> <input class="form-input" id = "employee_id"  type="text" name="employee_id"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="last_name">Last Name: </label> <input class="form-input" id = "last_name" type="text" name="last_name"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="first_name">First Name: </label> <input class="form-input" id = "first_name" type="text" name="first_name"><br>
    </div>

    <div class="form-group">
        <?php
        $genderOption = ['Male', 'Female', 'XXX', 'YYY'];
        echo '<label class="form-label">Gender: </label>';
        echo '<div class="form-control">';
        foreach ($genderOption as $gender){

            echo "<input type='radio' name='gender' value='$gender'>";
            echo "<label>$gender</label>";

        }
        echo '</div>';
        ?>

    </div>

    <div class="form-group">
        <label class="form-label" for="title">Title: </label> <input class="form-input" id = "title" type="text" name="title"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="suffix">Suffix: </label> <input class="form-input" id = "suffix" type="text" name="suffix"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="birthdate">BirthDate: </label> <input class="form-input" id = "birthdate" type="datetime-local" name="birthdate"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="hiredate">HireDate: </label> <input class="form-input" id = "hiredate" type="datetime-local" name="hiredate"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="ssn">SSN # (if applicable): </label> <input class="form-input" id = "ssn" type="text" name="ssn"><br>
    </div>
    <div class="form-group">
        <?php
        $reportsToOptions = ['Buchanan', 'Davolio', 'Fuller', 'Leverling', 'Peacock'];

        echo '<label class="form-label">Report to: </label>
        <select name="reports_to">';
        echo '<div>';
        foreach ($reportsToOptions as $option) {
            echo "<option class='form-input form-input-option' value='$option'>$option</option>";
        }

        echo '</select><br>';

        ?>
    </div>

    <h2>Contact Info</h2><hr>
    <div class="form-group">
        <label class="form-label" for="email">Email: </label> <input class="form-input" id = "email" type="email" name="email"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="address">Address: </label> <input class="form-input" id = "email" type="text" name="address"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="City">Email: </label> <input class="form-input" id = "city" type="text" name="city"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="region">Region: </label> <input class="form-input" id = "region" type="text" name="region"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="postal_code">Postal Code: </label> <input class="form-input" id = "postal_code" type="text" name="postal_code"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="country">Country: </label> <input class="form-input" id = "country" type="text" name="country"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="us_home_phone">US Home Phone: </label> <input class="form-input" type="tel" name="us_home_phone"><br>
    </div>
    <div class="form-group">
        <label class="form-label" for="photo">Photo: </label> <input class="form-input" type="file" name="photo"><br>
    </div>
<!--    <input class="form-input" type="submit" value="Submit">-->

    <h2 for="optional_info">Optional Info:</h2><hr>
    <div class="form-group">
        <label class="form-label" for="note">Notes: </label>
        <textarea id="note" name="editor1"></textarea>
    </div>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
<?php
    $shiftOptions = ['Regular', 'Gravy Yard'];
    echo'<div class="form-group">';
    echo '<label class="form-label" for="note">Preferred Shift: </label>';
    echo '<div class="form-control">';
    foreach ($shiftOptions as $item){
        echo "<input class='form-input form-input-checkbox' type='checkbox' name='shift' value='$item'> $item<br>";
    }
    echo '</div>';
    echo'</div>';

    echo '<div class="form-group">';
    echo '<label class="form-label">Active?</label>';
    echo "<input type='checkbox' name='shift' value=''><br>";
    echo '</div>';


    echo '<div class="form-group">';
    echo '<label class="form-label" for="capcha">Are you human?: </label>';
    echo '<button>Click to change</button>';
    echo '<br>';
    echo '<input class="form-input" id = "capcha" type="text" name="capcha">';
    echo '</div>';
?>

</form>
</body>
</html>
