<?php

class A
{
    public function message()
    {
        $msg = "Hello World";
        echo $msg;
    }
}
$obj = new A;
$obj->message();

?>