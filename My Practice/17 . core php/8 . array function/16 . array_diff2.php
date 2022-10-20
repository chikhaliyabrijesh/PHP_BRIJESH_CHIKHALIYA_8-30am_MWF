<?php

// The array_diff() function compares the values of two (or more) arrays, and returns the differences.

$arr1 = array("a"=>"akshar","b"=>"anant","c"=>"arjun","d"=>"nirav");

$arr2 = array("a"=>"akshar","f"=>"anant","d"=>"parth");

$arr3 = array("a"=>"akshar","b"=>"akshay","h"=>"nirav");

$new_arr = array_diff($arr1,$arr2,$arr3);

print_r($new_arr);

?>