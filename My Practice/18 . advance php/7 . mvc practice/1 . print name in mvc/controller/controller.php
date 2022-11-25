<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        $name="My Name Is Brijesh";
        echo $name;
    }
}
$obj=new controller;

?>