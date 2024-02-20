
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project14</title>
    <link rel="stylesheet" href="style.css" >

</head>
<body class = "form-body">
<h4>Basic info</h4><hr>
<?php
$reports = array (
    "Buchanan","Buchunu","Bechene"
);
// You can use the $countries array in your PHP code as needed.
?>
<form class="form-body-head">
    <div>
        <div class="form-group">
            <label class="form-label">Employee ID</label>
            <input type="text" name="employee_id" value="9" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Last name</label>
            <input type="text" name="lastname" value="Dos" class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label">First Name</label>
            <select>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        <div class="custom-radio">
            <label class="form-label gender-label">Gender</label>
            <div class="custom-control">
                <input class="custom-control-input" value="1" type="radio"  name="gender" checked="">
                <label for="gender" class="custom-control-label">Male</label>
            </div>
            <div class="custom-control ">
                <input class="custom-control-input" value="0" type="radio"  name="gender">
                <label for="no_gender" class="custom-control-label">Female</label>
            </div>
            <div class="custom-control">
                <input class="custom-control-input" value="0" type="radio"  name="gender">
                <label for="no_gender1" class="custom-control-label">XXX</label>
            </div>
            <div class="custom-control ">
                <input class="custom-control-input" value="0" type="radio"  name="gender">
                <label for="no_gender2" class="custom-control-label">ZZZ</label>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Suffix</label>
            <input type="text" name="suffix" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">BirthDate</label>
            <input type="datetime-local" name="birthdate" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">HireDate</label>
            <input type="datetime-local" name="hiredate" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">SSN # (if applicable)</label>
            <input type="text" name="ssn" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Report To</label>
            <select class="form-control">
                <?php
                foreach ($reports as $report) {
                    echo "<option value=\"$report\">$report</option>";
                }
                ?>
            </select>
        </div>
    </div>
</form>
<h4>Contact Info</h4><hr>
<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
// You can use the $countries array in your PHP code as needed.
?>
<form>
    <div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="9" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Address</label>
            <input type="text" name="address" value="7 Houndstooth Rd." class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label">City</label>
            <input type="text" name="city" value="London" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Region</label>
            <input type="text" name="region" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Postal Code</label>
            <input type="text" name="postal_code" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Country</label>
            <select name="country" class="form-control">
                <?php
                foreach ($countries as $country) {
                    echo "<option value=\"$country\">$country</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">US Home phone</label>
            <input type="tel" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>
    </div>
</form>
<h4>Optional Info</h4><hr>

<form>
    <div>
        <div class="form-group">
            <label class="form-label" >Notes</label>
            <textarea name="content" id="content" class="form-group"></textarea>
        </div>
        <script src="ckeditor/ckeditor5-build-classic/ckeditor.js"></script>

        <script>
            ClassicEditor
                .create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

        <div class="custom-radio">
            <label class="form-label gender-label">Preferred shift</label>
            <div class="custom-control">
                <input class="custom-control-input" value="1" type="checkbox" style="20px" name="preferred_shift" checked="">
                <label for="gender" class="custom-control-label">Regula</label>
            </div>
            <div class="custom-control ">
                <input class="custom-control-input" value="0" type="checkbox" style="20px"  name="preferre_shift">
                <label for="no_gender" class="custom-control-label">Gravy Yard</label>
            </div>
        </div>

        <div class="custom-checkbox">
            <label class= "form-label ">Active?</label>
            <input class="custom-control-input control-input" value="0" type="checkbox"  name="active">
        </div>
        <form action="submit_form.php" method="post">
            <div class="g-recaptcha" data-sitekey="your-recaptcha-site-key" style="5px"></div>
        </form>
        <div class="form-group-img">
            <img src="picture/capcha.png " alt="Mô tả hình ảnh" width="180px" height="60px" style="margin-left: 230px" >
        </div>
        <div class="form-group">
            <label class="form-label">Are you human?</label>
            <div class="form-group-children">
                <button type="button" onclick="refreshCaptcha()" style="background-color: white ; border: none" >Click to change</button>
                <input type="text" name="region" class="form-control ">
            </div>
        </div>
    </div>
</form>
<hr>
<div class="form-footer">
    <div class ="form-footer-left">
        <button class="nav-button">←</button>
        <button class="nav-button">→</button>
        <p>*required</p>
    </div>
    <div class ="form-footer-right">
        <input type="submit" name = "submit" value="submit">
        <input type="submit" name = "cancel" value="cancel">
    </div>
</div>
</body>
</html>