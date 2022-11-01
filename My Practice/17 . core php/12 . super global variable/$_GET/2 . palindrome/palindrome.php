<?php

if(isset($_GET["sub"]))
{
    $no = $_GET["num"];
    $sum = 0;
    $n = $no;

    while(floor($no))
    {
        $r = $no % 10;
        $sum = $r + ($sum * 10);
        $no = $no / 10;
    }
    if($n == $sum)
    {
        echo "<h2 align='center' style='color:green'>$n is a palindrome number</h2>";
        header("refresh:4,form.php");
    }
    else
    {
        echo "<h2 align='center' style='color:red'>$n is not a palindrome number</h2>";
        header("refresh:4,form.php");
    }

}

?>