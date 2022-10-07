<?php

$date1=mktime(0,0,0,date("m"),date("d")+60,date("y"));
echo "after 60 days the date is : ".date("d/m/Y",$date1)."<br><br>";

$date2=mktime(0,0,0,date("m"),date("d")-44,date("y"));
echo "before 39 days the date is : ".date("d/m/Y",$date2)."<br><br>";

$date3=mktime(0,0,0,date("m")+11,date("d")+11,date("y")+10);
echo "After 11 days , 11 month , 10 years the date is : ".date("d/m/Y",$date3)."<br><br>";

?>

