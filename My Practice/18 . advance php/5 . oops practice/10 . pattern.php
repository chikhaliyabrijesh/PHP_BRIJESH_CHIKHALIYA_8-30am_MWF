<?php

class pattern
{
    public function triangle()
    {
        $k = 7;
        for($i=1;$i<=7;$i++)
        {
            $k--;
            for($j=1;$j<=13;$j++)
            {
                if($j<=7-$k || $j>=7+$k)
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
$obj -> triangle();


?>