<?php

class pattern
{
    public function rev_triangle()
    {
        for($i=1;$i<=7;$i++)
        {
            for($j=1;$j<=13;$j++)
            {
                if($j<=8-$i || $j>=6+$i)
                {
                    echo "* ";
                }
                else
                {
                    echo "&nbsp&nbsp&nbsp";
                }
            }
            echo "<br>";
        }
    }
}
$obj = new pattern;
$obj -> rev_triangle();


?>