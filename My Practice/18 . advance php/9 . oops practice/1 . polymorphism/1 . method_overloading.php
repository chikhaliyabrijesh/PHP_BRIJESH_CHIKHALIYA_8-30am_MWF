<?php

class A
{
    public function add($a,$b)
    {
        $c = $a + $b;
        echo "The addition is : ".$c."<br><br>";
    }
}
class  B extends A
{
    public function add($a,$b,$c)
    {
        $d = $a + $b + $c;
        echo "The addition is : ".$d."<br>";
    }
}
$obj = new B;
$obj -> add(10,20,30);

?>