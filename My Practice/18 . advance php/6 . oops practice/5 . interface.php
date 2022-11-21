<?php

interface circle
{
    public function areacir();
}
interface square
{
    public function areasq();
}
interface triangle
{
    public function areatri();
}
class shapes implements circle,square,triangle
{
    public function areacir()
    {
        $r = 25;
        $pi = 3.14;

        $area = 2 * $pi * $r;
        
        echo "The Area Of Circle Is : ".$area."<br><br>";
    }
    public function areasq()
    {
        $l = 30;

        $area = $l * $l;

        echo "The Area Of Square Is : ".$area."<br><br>";
    }
    public function areatri()
    {
        $base = 40;
        $height = 30;

        $area = 0.5 * $base * $height;

        echo "The Area Of Triangle Is : ".$area."<br><br>";
    }
}
$obj = new shapes;
$obj -> areacir();
$obj -> areasq();
$obj -> areatri();


?>