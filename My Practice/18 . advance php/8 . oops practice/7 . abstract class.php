<?php

abstract class add
{
    public function addition()
    {
        $a = 10;
        $b = 50;

        $c = $a + $b;

        echo "The addition of two number is : ".$c."<br><br>";
    }
}
class result extends add
{
    public function display()
    {
        $a = 50;
        $b = 40;

        $c = $a - $b;

        echo "The Substraction of two numbers is : ".$c;
    }
}
$obj = new result;
$obj->addition();
$obj->display();

?>