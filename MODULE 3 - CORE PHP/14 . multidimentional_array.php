<?php

$mdarr = array(array(2.5,4.6,5.5,2.4,6.7),
               array(3.5,4.8,6.6,7.8,9.1),
               array(1.1,3.9,8.6,4.4,9.3));

echo print_r($mdarr);

echo "<br><br>";

for($i=0;$i<count($mdarr);$i++)
{
    for($j=0;$j<count($mdarr[$i]);$j++)
    {
        echo print_r($mdarr[$i][$j]);
        echo "      ";
    }
    echo "<br><br>";
}

?>