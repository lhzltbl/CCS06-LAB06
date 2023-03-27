<!DOCTYPE html>
<html>
<body>

<h1>PROFILE FORM</h1>

<form method="post" action="profile-form.php">
  Complete Name: <input type="text" name="cname" required>
  <br><br>

  Birthdate: <input type="date" id="bdate" size="30" required>
  <br><br>

  Email: <input type="email" id="email" pattern=".+@auf.edu.ph" size="30" required>
  <br><br>

  Program: 
  <select name="program" id="program">
    <option value="Select program">Select program</option>
  	<option value="BSCS">BSCS</option>
  	<option value="BSIT">BSIT</option>
  </select>
  <br><br>
  
  Favorite Color: <input type="color" id="fcolor">
  <br><br>
  
  Superpower Level: <input type="range" id="spower" min="0" max="10">
  <br><br>
  
  <input type="submit">
  
</form>

<h1>YOUR INPUT</h1>

<?php
if (isset($_POST['submit'])):
    // collect value of input field
    $complete_name = $_POST['cname'];
    if (empty($complete_name)) {
        echo "Name is empty";
    } else {
        echo $complete_name;
    }


if (isset($_POST['submit'])):
    // collect value of input field
    $birthdate = $_POST['bdate'];
    if (empty($birthdate)) {
        echo "Bithdate is empty";
    } else {
        echo $birthdate;
    }


if (isset($_POST['submit'])):
    // collect value of input field
    $email = $_POST['email'];
    if (empty($email)) {
        echo "Email is empty";
    } else {
        echo $email;
    }


if (isset($_POST['submit'])):
    // collect value of input field
    $program = $_POST['program'];
    if (empty($program)) {
        echo "Program is empty";
    } else {
        echo $program;
    }


if (isset($_POST['submit'])):
    // collect value of input field
    $favorite_color = $_POST['fcolor'];
    if (empty($favorite_color)) {
        echo "Favorite color is empty";
    } else {
        echo $favorite_color;
    }


if (isset($_POST['submit'])):
    // collect value of input field
    $superpower_level = $_POST[''];
    if (empty($superpower_level)) {
        echo "Superpower level is empty";
    } else {
        echo $superpower_level;
    }


echo $complete_name
echo $birthdate
echo $email
echo $program
echo $favorite_color
echo $superpower_level

?>

</body>
</html>