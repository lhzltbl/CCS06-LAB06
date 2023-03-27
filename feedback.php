<!DOCTYPE html>
<html>
<body>

<h1>FEEDBACK FORM</h1>

<form method="post" action="thankyou.php">
  Compete Name: <input type="text" name="cname" required>
  <br><br>

  Email: <input type="email" id="email" pattern=".+@auf.edu.ph" size="30" required>
  <br><br>

  Type: 
  <select name="program" id="program">
    <option value="Select type">Select type</option>
  	<option value="Inquiry">Inquiry</option>
  	<option value="Feedback">Feedback</option>
    <option value="Other">Other</option>
  </select>
  <br> <br>
  
  Level of Satisfaction: <input type="range" name="satisfaction_level" id="spower" min="0" max="10">
  <br><br>
  
  Feedback Message: <input type="text" name="message" id="message">
  <br><br>
  
  <input type="submit">
  
</form> 