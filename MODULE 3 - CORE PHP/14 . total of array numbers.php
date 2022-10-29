<?php

$num = array(5,10,15,20,25);

$total = 0;
for($i=0;$i<count($num);$i++)
{
    $total += $num[$i];
}
echo "The total of numbers is : ".$total;


?>