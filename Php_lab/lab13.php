//! WAP to check whether the number is exactly 5 and 10.
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
if($a==5 && $b==10){
    echo("Input number are $a and $b which are exactly 5 and 10");
}else{
    echo("Input number are $a and $b which are not exactly 5 and 10");
}
}

?>