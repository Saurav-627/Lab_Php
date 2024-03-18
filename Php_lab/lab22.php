//! WAP to print the following fibonacci series: 1,1,2,3,5,8,....upto 15 terms.
<?php
echo("<br>fibonacci series: 1,1,2,3,5,8,...upto 15 term<br>");
$a=0;
$b=1;
echo("Series upto 15th term:");
for($i=1;$i<=15;$i++){
$c=$a+$b;
$a=$b;
$b=$c;
echo("$a ");
}


?>