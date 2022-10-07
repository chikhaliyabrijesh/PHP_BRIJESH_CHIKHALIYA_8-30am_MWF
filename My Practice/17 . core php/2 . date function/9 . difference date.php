<?php

$roomrate=2000;
echo "one day room rate of hotel is : ".$roomrate."<br><br>";

$checkindate=mktime(0,0,0,date("m"),date("d"),date("y"));
$checkoutdate=mktime(0,0,0,date("m"),date("d")+25,date("y"));

$finalresult=($checkoutdate-$checkindate)/86400;
$total=$finalresult * $roomrate;

echo "today numbers of day staying : ".$finalresult."<br><br>";
echo "total bill is : ".$total;

?>