//! WAP to print the following pattern.
<?php
echo("<br> a)");
for($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo("*");
    }
    echo("<br>");
    }

echo("b)<br>");
for($i=0;$i<5;$i++){
    for($j=0;$j<$i;$j++){
        echo(" ");
    }
    for($k=5-$i;$k>0;$k--){
        echo("*");
    }
    echo("<br>");
    }
   
    echo("c)<br>");
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo("$j");
        }
        echo("<br>");
        }

    echo("d)");
    for($i=0;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo("$i");
        }
        echo("<br>");
        }

        echo("e) <br>");
        for($i=1;$i<=5;$i++){
            for($j=1;$j<=$i;$j++){
                if($j%2==1)
                echo("1");
                else
                echo("0");
            }
            echo("<br>");
            }

?> 




