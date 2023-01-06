<?php

//  Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required.

class addition
{
    public function __construct()
    {
        $a=10;
        $b=20;
        $c=$a+$b;
        echo "The addition is : $c"."<br><br>";
    }
}
class multiplication extends addition
{
    public function __construct()
    {
        $a=10;
        $b=20;
        $c=$a*$b;
        echo "The multiplication is : $c"."<br><br>";
        parent::__construct();
    }
}
$obj = new multiplication;

?>