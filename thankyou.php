<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<h1>Thank You!</h1>

<p> Received <?php echo $_GET["type"]; ?> message from <?php echo $_GET["complete_name"]; ?> <?php echo "(" ; echo $_GET["email"]; echo ")" ;?> <br><br>
<?php echo $_GET["message"]; ?> <br><br>
Satisfaction Level: <?php echo $_GET["satisfaction_level"]; ?>
</body>
</html>