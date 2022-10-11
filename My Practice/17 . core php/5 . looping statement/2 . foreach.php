<?php

$arr=array("akshar","anant","brijesh","kishan","kripal","mayank","jeel","jeet","param","tejas");
// print_r($arr);
// asort($arr);
// ksort($arr);
// krsort($arr);
arsort($arr);


foreach($arr as $value)
{
    echo "my name is : ".$value."<br>";
} 



?>