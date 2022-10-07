<?php

function first($num)
{
    $num+=5;
}
function second(&$num)
{
    $num+=7;
    
}
$number = 10;
first($number);
echo "Original value is : $number<br>";

second($number);
echo "Original value is : $number<br>";

?>