<?php

trait A
{
    public function circle()
    {
        $pi = 3.14;
        $r = 12;

        $area = 2 * $pi * $r;

        echo "The Area Of Circle Is : ".$area;
    }
}
class B
{
    use A;
}
$obj=new B;
$obj->circle();

?>