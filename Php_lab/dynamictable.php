<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
     <label for="firstNumber">Enter Starting value for N</label>
     <input type="number" name="firstNumber" id="firstNumber"><br>
     <label for="secondNumber">Enter Ending value for N</label>
     <input type="number" name="secondNumber" id="secondNumber"><br>
     <input type="submit" value="Display table" name="btn">
    </form>
    
</body>
</html>
<?php
function displayTable($start,$end){
    echo("<table border=1px>");
    echo("<tr><th>N</th>");
    echo ("<th>10*N</th>");
    echo ("<th>100*N</th>");
    echo ("<th>1000*N</th>");
    echo("</tr>");
    for($i=$start;$i<=$end;$i++){
    echo("<tr><td>$i</td>");
    echo"<td>".($i*10). "</td>";
    echo"<td>".($i*100). "</td>";
    echo"<td>".($i*1000). "</td>";
    echo("</tr>");
    }
    echo("</table>");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$a = $_POST['firstNumber'];
$b =$_POST['secondNumber'];
displayTable($a,$b);
}



?>