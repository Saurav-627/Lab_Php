//! WAP to find simple interest.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter Principle</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <label for="secondNumber">Enter Time</label>
     <input type="number" name="secondNumber" id="secondNumber"><br>
     <label for="secondNumber">Enter Rate</label>
     <input type="number" name="thirdNumber" id="thirdNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>   
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$p = $_POST['firstNumber'];
$t =$_POST['secondNumber'];
$r =$_POST['thirdNumber'];
$si=($p*$t*$r)/100;
echo("Simple Interest is $si");
}

?>