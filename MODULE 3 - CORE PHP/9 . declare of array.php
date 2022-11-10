<?php

//Numaric or Index array : $arrayname = array("value1","value2","value3");

$color = array("Red","Yellow","Blue","Green","Orange");
print_r($color);

echo "<br><br>";

//Associative array : $arrayname = array("key1"=>"value1","key2"=>"value2","key3"=>"value3");

$name = array("0"=>"Ketan","1"=>"Bhargav","2"=>"Nirav","3"=>"Parth","4"=>"Maulik");
print_r($name);

echo "<br><br>";

//Multidimentional array : $arrayname = array(("firstarry")=>array("value1","value2"),("secondarray")=>array("value1","value2"));

$arr = array(("technical")=>array("php","java","node js","asp.net","python"),("non-technical")=>array("wd","GD","SEO","DM"));
print_r($arr);

?>
