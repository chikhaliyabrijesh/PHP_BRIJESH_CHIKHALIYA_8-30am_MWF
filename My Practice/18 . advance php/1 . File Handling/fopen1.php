<?php

$file=fopen("table.txt","w+") or die("file does not exist");

$txt="happy diwali";
fwrite($file,$txt);

fclose($file);

?>

