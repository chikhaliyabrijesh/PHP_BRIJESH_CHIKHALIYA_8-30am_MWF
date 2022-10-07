<?php

date_default_timezone_set("asia/calcutta");
echo "today is : ".date("l jS\ F Y h:i:s a")."<br><br>";

echo "10th july 1999 the day is : ".date("l",mktime(0,0,0,date("7"),date("10"),date("Y")));



?>