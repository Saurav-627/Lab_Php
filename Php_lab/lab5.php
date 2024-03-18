//! WAP to find the area of rectangle.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter Length</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <label for="secondNumber">Enter breadth</label>
     <input type="number" name="secondNumber" id="secondNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$l = $_POST['firstNumber'];
$b =$_POST['secondNumber'];
$area=$l*$b;
echo("Area of rectangle is $area");
}

?>