//! WAP to add,subtract,multiply and divide two numbers.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter First Number</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <label for="secondNumber">Enter Second Number</label>
     <input type="number" name="secondNumber" id="secondNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$a = $_POST['firstNumber'];
$b =$_POST['secondNumber'];
$s=$a+$b;
$m=$a*$b;
$d=$a-$b;
$div=$a/$b;
echo("Sum is $s <br>");
echo("Difference is $d <br>");
echo("Multiply is $m <br>");
echo("Divide is $div <br>");
}

?>