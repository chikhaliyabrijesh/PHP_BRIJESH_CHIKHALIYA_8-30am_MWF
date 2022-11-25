<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        $k = 7;
        for($i=1;$i<=7;$i++)
        {
            $k--;
            for($j=1;$j<=13;$j++)
            {
                if($j<=7-$k || $j>=7+$k)
                {
                    echo "$i&nbsp";
                }
                else
                {
                    echo "&nbsp&nbsp&nbsp";    
                }
            }
            echo "<br>";
        }
        for($i=6;$i>=1;$i--)
        {
            for($j=1;$j<=13;$j++)
            {
                if($j<=0+$i || $j>=14-$i)
                {
                    echo "$i&nbsp";
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
$obj=new controller;

?>