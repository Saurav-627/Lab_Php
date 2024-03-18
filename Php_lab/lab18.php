//! WAP to print the following series:
<?php
echo("<br>a) 5,10,15,20,.....50<br>");
echo ("Series:");
for($i=5;$i<=50;$i+=5){
    echo (" $i ");
}
echo("<br>b) 1,4,9,16,.....upto 20 terms<br>");

$s=0;
echo("Series:");
for($j=1;$j<=20;$j++){
    if($j%2!=0){
        $s=$s+$j;
        echo (" $s");
    }
}
echo("<br>c) 100,98,96,94.....upto 10 term<br>");
$l=0;
echo("Series:");
for($k=100;$l<10;$k-=2){
   $l++;
   echo("$k ");
}
?>