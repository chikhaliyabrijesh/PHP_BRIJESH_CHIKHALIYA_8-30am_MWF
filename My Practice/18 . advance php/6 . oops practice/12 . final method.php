<?php

class A
{
    final public function display($fname)
    {
        echo "My first name is Brijesh"."<br>";
    }
}
class B
{
    public function display($lname)
    {
        echo "My last name is Chikhaliya"."<br>";
    }
}
$obj = new B;
$obj -> display();
$obj -> display();


?>