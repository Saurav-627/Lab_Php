//! WAP to read a no. and find out if it is armstrong no or not.
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
$num = $_POST['firstNumber'];
$sum=0;
$n=$num;
$digits=strlen((String)$num);
while($n!=0){
    $remainder=$n%10;
    $sum=$sum+pow($remainder,$digits);
    $n=$n/10;
}
if($num==$sum){
    echo("$num is an armstrong number");
}else{
    echo("$num is not armstrong number");
}
}
?>

<!------------ What is armstrong number?
suppose user le 153 number input garo then, armstrong number vaneko kati ota digits of number chan count garne 153 ma 3 ta no of digits chan ava jati ota digits chan teti choti multiply garne(or number of digits lai power ma halne) ani jodne like this:  (1^3)+(5^3)+(3^3) yeso garda same number aaunu paro (1^3)+(5^3)+(3^3)=1+125+27=153.
arko example: suppose 45 number input garo then yesma 2ta digits of number cha so dui dui choti multiply garne like this:, armstrong number : (4^2)+(5^2)=16+25=41 which is not equal to 45 so its not an armstrong number.
------------------>
