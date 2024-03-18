//! WAP to check whether the number is prime or not.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter number</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$n = $_POST['firstNumber'];
$p=1;
if($n<=1){
    $p=0;
}else{
    for($i=2;$i<=$n/2;$i++){
        if($n%$i==0){
            $p=0;
            break;
        }
    }
    if($p){
        echo("$n is a prime number<br>");
    }else{
        echo("$n is not prime number");
    }
}
}

?>