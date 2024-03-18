//! WAP to find the sum of odd numbers from 1 to 100.

<?php
echo("<br>Odd numbers from 1 to 100 are:<br>");
$sum=0;
for($i=0;$i<=100;$i++){
    if($i%2!=0){
        echo("$i ");
        $sum=$sum+$i;
    }
}
echo("<br>Sum of odd numbers from 1 to 100: $sum");

?>