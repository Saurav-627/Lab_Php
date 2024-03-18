//! WAP to calculate compound interest for the given principle,no of years and rate of interest.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter principle</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <label for="secondNumber">Enter no of years</label>
     <input type="number" name="secondNumber" id="secondNumber"><br>
     <label for="thirdNumber">Enter rate of interest</label>
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
$d=(1+($r/100));
$CI=$p*(pow($d,$t)-1);
echo("Compound Interest is $CI");

}

?>