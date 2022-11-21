<?php

class swap
{
    public function __construct($a,$b)
    {
       $a = $a + $b;
       $b = $a - $b;
       $a = $a - $b;

       echo "After Swapping : <br><br>a = ".$a."<br>b = ".$b."<br><br>"; 
    }
}
class simp_int extends swap
{
    public function smp_int()
    {
        $p = 20000;
        $r = 10;

        $si = ($p * $r)/100;

        echo "The Simple Interest Is : ".$si;
    }
}
$obj = new simp_int(10,20);
$obj -> smp_int();

?>