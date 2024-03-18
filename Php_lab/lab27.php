//! WAP to show the use of switch case statement.
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
     <select name="btn" id="btn" value="">
        <option value="1">Addition</option>
        <option value="2">Subtraction</option>
        <option value="3">Multiplication</option>
        <option value="4">Division</option>
     </select>
     <input type="submit" name='submit' value="click">
    </form>
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$a = $_POST['firstNumber'];
$b =$_POST['secondNumber'];
$c =$_POST['btn'];
switch($c){
    case 1:
    $sum=$a+$b;
    echo("Sum is $sum");
    break;
    case 2:
    $d=$a-$b;
    echo("Difference is $d");
    break;
    case 3:
    $m=$a*$b;
    echo("Multiplication is $m");
    break;
    case 4:
    $div=$a/$b;
    echo("Division is $div");
    break;
    default:
    echo("error");
}
}
?>



<!---------- When user click the submit btn the value that is entered is displayed in the box if we write this code:  ---->
    <!-- <form action="#" method="POST">
     <label for="firstNumber">Enter First Number</label>
     <input type="number" name="firstNumber" id="firstNumber" value="<?php if(isset($_POST['submit'])) echo $_POST['firstNumber']; ?>"><br>
     <label for="secondNumber">Enter Second Number</label>
     <input type="number" name="secondNumber" id="secondNumber" value="<?php if(isset($_POST['submit'])) echo $_POST['secondNumber']; ?>"><br>
     <select name="btn" id="btn" value="">
        <option value="1" <?php if(isset($_POST['submit']) && $_POST['btn'] == '1') echo 'selected'; ?>>Addition</option>
        <option value="2" <?php if(isset($_POST['submit']) && $_POST['btn'] == '2') echo 'selected'; ?>>Subtraction</option>
        <option value="3" <?php if(isset($_POST['submit']) && $_POST['btn'] == '3') echo 'selected'; ?>>Multiplication</option>
        <option value="4" <?php if(isset($_POST['submit']) && $_POST['btn'] == '4') echo 'selected'; ?>>Division</option>
     </select>
     <input type="submit" name='submit' value="click">
    </form> -->