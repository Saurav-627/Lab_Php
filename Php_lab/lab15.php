//! WAP to input CP and SP and check profit or loss. also find the profit or loss amount.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter Cost Price</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <label for="secondNumber">Enter Selling Price</label>
     <input type="number" name="secondNumber" id="secondNumber"><br>
     <input type="submit" value="click" name="btn">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$cp = $_POST['firstNumber'];
$sp =$_POST['secondNumber'];
$loss=$cp-$sp;
$profit=$sp-$cp;
if($cp>$sp){
    echo("CP is greater than SP, so there is loss<br>");
    echo("Loss = RS.$loss");
}else{
    echo("SP is greater than CP, so there is profit <br>");
    echo("Profit = RS.$profit");
}
}

?>