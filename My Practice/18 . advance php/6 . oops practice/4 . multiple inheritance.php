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
class square 

    public function areasq()
    {
        $l = 25;

        $area = $l * $l;

        echo "The Area Of Square Is : ".$area."<br><br>";
    }
}
class triangle extends circle,square
{
    public function areatri()
    {
        $base = 15;
        $height = 20;

        $area = 0.5 * $base * $height;

        echo "The Area Of Triangle Is : ".$area."<br><br>";
    }
}
$obj = new triangle;
$obj -> areacir();
$obj -> areasq();
$obj -> areatri();

?>