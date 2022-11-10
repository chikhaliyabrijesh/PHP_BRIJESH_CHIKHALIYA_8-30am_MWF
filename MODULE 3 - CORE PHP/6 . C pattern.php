<?php

for($i=1;$i<=7;$i++)
{
    for($j=1;$j<=7;$j++)
    {
        if(($i==1 || $i==7 || $j==1))
        {
            echo "*";
        }
        else
        {
            echo " ";
        }
    }
    echo "<br>";
}

?>
