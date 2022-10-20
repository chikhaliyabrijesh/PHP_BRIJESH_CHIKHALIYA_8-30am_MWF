<?php

$color = array("red","green","blue","yellow","orange","black","pink");
// $new_arr = array_rand($color);
$new_arr = array_rand($color,2);
print_r($new_arr);
echo "</br>";
// print_r($color[$new_arr]);
print_r($color[$new_arr[0]]);
echo "</br>";
print_r($color[$new_arr[1]]);

?>