//! WAP to print prime number from 1 to 100.
<?php
echo("<br>Prime number from 1 to 100:<br>");
for($i=1;$i<=100;$i++){
    $n=0;
    for($j=1;$j<=$i;$j++){
        if($i%$j==0)
        $n++;
    }
    if($n==2){
        echo("$i ");
    }
}

?>