//! WAP to find the factorial of the given number.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter a number</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$n = $_POST['firstNumber'];
$f=1;
for($i=1;$i<=$n;$i++){
    $f=$f*$i;
}
echo("Factorial of $n is $f ");
}
?>