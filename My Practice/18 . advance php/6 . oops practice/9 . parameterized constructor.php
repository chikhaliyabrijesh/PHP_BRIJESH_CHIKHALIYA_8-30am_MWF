<?php

class swap
{
    public function __construct($a,$b)
    {
       $a = $a + $b;
       $b = $a - $b;
       $a = $a - $b;

       echo "After Swapping : <br><br>a = ".$a."<br>b = ".$b; 
    }
}
$obj = new swap(10,20);

?>