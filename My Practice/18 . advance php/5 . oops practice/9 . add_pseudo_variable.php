<?php

class num
{
    public $a = 10;
    public $b = 20;
    public function addition()
    {
        $c = $this->a + $this->b;
        echo "The Addition of two numbers is : ".$c;
    }
}
$obj = new num;
$obj -> addition();

?>