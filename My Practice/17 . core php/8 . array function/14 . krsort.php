<?php

$arr=array(0=>"akshar",1=>"keval",2=>"bhargav",3=>"chandresh",4=>"nitin",5=>"tilak",6=>"yash");
krsort($arr);
foreach($arr as $value)
{
    echo $value."<br>";
}

?>