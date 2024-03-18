//! WAP to generate Armstrong number from 1 to 1000.

<?php
echo("<br>ArmStrong number from 1 to 1000 are:<br>");

for($num=1;$num<=1000;$num++){
    $sum=0;
    $digits=strlen((string)$num);
    $n=$num;
    for($i=0;$i<$digits;$i++){
        $remainder=$n%10;
        $sum=$sum+pow($remainder,$digits);
        $n=$n/10;
    }
 
if($sum ==$num){
   echo("$num ");
   
}
}
?>