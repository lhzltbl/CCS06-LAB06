<?php
$name = "Steve Wozniak";
$parameter = 1950;
$year = date("Y");
$age = $year - $parameter;
echo "Your name is $name, and your age is $age years old". "<br>";
if($age >= "18"){
    echo "You are voter" . "<br>";
}
if($age >= "60"){
    echo "You are a senior citizen" . "<br>";
}
?>