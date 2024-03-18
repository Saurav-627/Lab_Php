//! WAP to find the area of a circle.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter radius</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$r = $_POST['firstNumber'];
$area=3.1415*$r*$r;
echo("Area of a circle is $area");
}

?>