<?php

class addition
{
    public function __construct()
    {
        $a = 10;
        $b = 30;

        $c = $a + $b;

        echo "The Addition Is : ".$c."<br><br>";
    }
}
class multiply extends addition
{
    public function __construct()
    {
        parent::__construct();
        $a = 10;
        $b = 30;

        $c = $a * $b;

        echo "The Multiplication Is : ".$c."<br><br>";
    }
}
$obj = new multiply();

?>