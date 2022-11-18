<?php

class pattern
{
    public function heart()
    {
        for($i=1;$i<=3;$i++)
        {
            for($j=1;$j<=15;$j++)
            {
                if(($j>=4-$i && $j<=4+$i) || ($j>=12-$i && $j<=12+$i))
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
        for($i=1;$i<=8;$i++)
        {
            for($j=1;$j<=15;$j++)
            {
                if($j>=$i && $j<=16-$i)
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
$obj -> heart();


?>