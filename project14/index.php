<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="//cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
</head>
<body>

 <div class = "box">
 <form class="form">
    <h3>Basic Info</h3>

     <div class="form-group">
        <label>Employee ID </label>
         <input type="text" value="" id="employee_id" placeholder="Employee id">
     </div>
     <div class="form-group">
        <label>Last Name</label>
         <input type="text" value="" id="last_name">

     </div>
     <div class="form-group-radio" style="">
         <label>Gender</label>
         <label style="grid-column: 2; grid-row: 1"><input type="radio" name="gender">Male</label>
         <label style="grid-column: 2; grid-row: 2"><input type="radio" name="gender">Female</label>
         <label style="grid-column: 2; grid-row: 3"><input type="radio" name="gender">XXX</label>
         <label style="grid-column: 2; grid-row: 4"><input type="radio" name="gender">ZZZ</label>
     </div>

     <div class="form-group">
         <label>Title</label>
         <input type="text">
     </div>
     <div class="form-group">
        <label>Suffix</label>
         <input type="text">
     </div>
     <div class="form-group">
         <label>BirthDate</label>
         <input type="date">
     </div>
     <div class="form-group">
         <label>HireDate</label>
         <input type="date">
     </div>
     <div class="form-group">
         <label>SSN # (if applicable)</label>
         <input type="text" >
     </div>
     <div class="form-group">
        <label>Reports To</label>
         <select class="select_style">
             <option value="test">test</option>
         </select>
     </div>

     <h3>Contact Info</h3>
     <div class="form-group">
         <label>Email</label>
         <input type="email" >
     </div>
     <div class="form-group">
        <label>Address</label>
         <input type="text" >
     </div>
     <div class="form-group">
         <label>City</label>
         <input type="text" >
     </div>
     <div class="form-group">
         <label>Region</label>
         <input type="text" >
     </div>
     <div class="form-group">
         <label>Postal Code</label>
         <input type="text" >
     </div>
     <div class="form-group">
         <label>Country</label>
         <select class="select_style">
             <?php
             include "data.php";
             foreach ($countries as $country)
             echo '<option>'.$country.'</option>';
             ?>
             <option value="test">test</option>
         </select>
     </div>
     <div class="form-group">
         <label>US Home Phone</label>
         <input type="text" >
     </div>
     <div class="form-group">
         <label>Photo</label>
         <input type="file" id="file-upload" multiple required />
     </div>

    <h3>Contact Info</h3>
     <div class="form-group">
         <label>Notes</label>
         <textarea  id="notes" class="textarea_style"></textarea>
         <script>
             CKEDITOR.replace('notes');
         </script>
     </div>
     <div class="form-group-checkbox">
         <label>Preferred Shift</label>
         <label style="grid-column: 2; grid-row: 1"><input type="checkbox" id="PS1">Regular</label>
         <label style="grid-column: 2; grid-row: 2"><input type="checkbox" id="PS2">Gravy Yard</label>
     </div>
     <div class="form-group-checkbox">
         <label>Active?</label>
         <label><input type="checkbox" id="Active">
     </div>

     <div class="form-group">
         <label>Are you human?</label>
         <input type="text" >
     </div>
     <h3></h3>
     <div class="form-group">
         <div style="grid-column: 1; grid-row: 1">
             <button class="button">←</button>
             <button class="button">→</button>
             <p>*required</p>
         </div>
         <div style="grid-column: 2; grid-row: 1; display: flex">
             <input type="submit" name = "submit" value="Submit" class="input-submit" style="margin-left: 20%;">
             <input type="submit" name = "cancel" value="Cancel" class="input-submit" style="margin-left: 10px">
         </div>
     </div>
 </form>
 </div>
</body>
</html>

