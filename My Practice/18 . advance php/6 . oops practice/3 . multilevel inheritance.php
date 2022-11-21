<?php

class circle
{
    public function areacir()
    {
        $r = 20;
        $pi = 3.14;

        $area = 2 * $pi * $r;
        
        echo "The Area Of Circle Is : ".$area."<br><br>";
    }
}
class square extends circle
{
    public function areasq()
    {
        $l = 25;

        $area = $l * $l;

        echo "The Area Of Square Is : ".$area."<br><br>";
    }
}
class triangle extends square
{
    public function areatri()
    {
        $base = 15;
        $height = 20;

        $area = 0.5 * $base * $height;

        echo "The Area Of Triangle Is : ".$area."<br><br>";
    }
}
class simple_int extends triangle
{
    public function simp_int()
    {
        $p = 10000;
        $r = 10;

        $si = ($p * $r)/100;
        
        echo "The Simple Interest Is : ".$si;
    }
}
$obj = new simple_int;
$obj -> areacir();
$obj -> areasq();
$obj -> areatri();
$obj -> simp_int();

?>