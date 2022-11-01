<?php

if(isset($_REQUEST["chk"]))
{
    $n = $_REQUEST["num"];
    if($n%2==0)
    {
        echo "<h1 style='color : green' align='center'>This Is An Even Number</h1>";
        header("refresh:4,user.php");
    }
    else
    {
        echo "<h1 style='color : red' align='center'>This Is A Odd Number</h1>";
        header("refresh:4,user.php");
    }
}

?>