//! WAP to find the smallest number among three numbers.
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
     <label for="thirdNumber">Enter Third Number</label>
     <input type="number" name="thirdNumber" id="thirdNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$a = $_POST['firstNumber'];
$b =$_POST['secondNumber'];
$c =$_POST['thirdNumber'];
if($a<$b && $a<$c){
    echo("$a is Smallest number");
}else if($b<$a && $b<$c){
    echo("$b is Smallest number");
}else{
    echo("$c is Smallest number");
}
}

?>
