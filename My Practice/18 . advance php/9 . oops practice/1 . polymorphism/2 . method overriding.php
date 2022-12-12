<?php

class A
{
    public function calc($a,$b)
    {
        $c = $a * $b;
        echo "The multiplication is : ".$c."<br><br>";
    }
}
class B extends A
{
    public function calc($a,$b)
    {
        $c = $a + $b;
        echo "The addition is : ".$c."<br>";
    }
}
$obj = new B;
$obj -> calc(10,20);

?>