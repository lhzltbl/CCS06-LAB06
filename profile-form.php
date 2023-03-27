<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$complete_name = $birthdate = $email = $program = $favorite_color = $superpower_level = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $complete_name = profile_inputs($_POST["complete_name"]);
  $birthdate = profile_inputs($_POST["birthdate"]);
  $email = profile_inputs($_POST["email"]);
  $program = profile_inputs($_POST["program"]);
  $favorite_color = profile_inputs($_POST["favorite_color"]);
  $superpower_level = profile_inputs($_POST["superpower_level"]);
}

function profile_inputs($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="complete_name">
  <br><br>
  Birthdate: <input type="date" name="birthdate">
  <br><br>
  E-mail: <input type="email" name="email">
  <br><br>
  Program: <select name="program">
  <option value="BSCS">BSCS</option>
  <option value="BSIT">BSIT</option> 
  </select>
   <br><br>
  Fovorite Color: <input type="color" name="favorite_color">
  <br><br>
  Superpower Level:  <input type="range" name="superpower_level"  min="0" max="100">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $complete_name;
echo "<br>";
echo $birthdate;
echo "<br>";
echo $email;
echo "<br>";
echo $program;
echo "<br>";
echo $favorite_color;
echo "<br>";
echo $superpower_level;
?>

</body>
</html>