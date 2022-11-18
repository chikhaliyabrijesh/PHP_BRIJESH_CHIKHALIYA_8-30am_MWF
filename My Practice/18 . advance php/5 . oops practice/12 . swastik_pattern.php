<?php

class pattern
{
    public function swastik()
    {
        for($i=1;$i<=15;$i++)
        {
            for($j=1;$j<=15;$j++)
            {
                if(($i==8 || $j==8)||($i==1 && $j>=8)||($i<=8 && $j==1)||($i==15 && $j<=8)||($i>=8 && $j==15))
                {
                    echo "*";
                }
                else
                {
                    echo "&nbsp&nbsp";
                }
            }
            echo "<br>";
        }
    }
}
$obj = new pattern;
$obj -> swastik();


?>