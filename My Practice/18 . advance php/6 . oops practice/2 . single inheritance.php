<?php

class circle
{
    public function areacir()
    {
        $r = 15;
        $pi = 3.14;

        $area = 2 * $pi * $r;
        
        echo "The Area Of Circle Is : ".$area."<br><br>";
    }
}
class square extends circle
{
    public function areasq()
    {
        $l = 10;

        $area = $l * $l;

        echo "The Area Of Square Is : ".$area;
    }
}
$obj = new square;
$obj -> areacir();
$obj -> areasq();

?>