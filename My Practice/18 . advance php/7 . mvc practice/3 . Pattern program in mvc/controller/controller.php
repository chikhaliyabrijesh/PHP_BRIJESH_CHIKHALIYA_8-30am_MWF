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
                    echo "*&nbsp";
                }
                else
                {
                    echo "&nbsp&nbsp&nbsp";    
                }
            }
            echo "<br>";
        }
        for($i=2;$i<=7;$i++)
        {
            for($j=1;$j<=13;$j++)
            {
                if($j<=8-$i || $j>=6+$i)
                {
                    echo "*&nbsp";
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