//! WAP to check whether the number is divisible by 7 byt not by 13.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter Number</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$a = $_POST['firstNumber'];
if($a%7==0 || $a%13!=0){
    echo("$a is divisible by 7 but cannot be divisible by 13");
}else{
    echo("$a is divisible by 13 but cannot be divisible by 7");
}
}

?>