<?php

$arr1 = array("a"=>"akshar","b"=>"anant","c"=>"arjun","d"=>"nirav");

$arr2 = array("a"=>"akshar","f"=>"anant","d"=>"parth");

$new_arr = array_diff($arr1,$arr2);

print_r($new_arr);

?>