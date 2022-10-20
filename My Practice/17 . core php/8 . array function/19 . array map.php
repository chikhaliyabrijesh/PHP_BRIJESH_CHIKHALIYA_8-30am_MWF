<?php

function square($n , $m)
{
    //return $n * $n;
    return "$n = $m";
}

$a = [1,2,3,4,5];
$b = ['lemon','orange','banana','apple','guava'];

//$new_arr = array_map('square',$a);
$new_arr = array_map('square',$a,$b);
print_r($new_arr);

?>