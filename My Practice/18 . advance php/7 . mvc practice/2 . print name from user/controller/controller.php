<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        if(isset($_POST["chk"]))
        {
            $nm=$_POST["nm"];
            echo "<h1 align='center' style='color:green'>My Name Is : ".$nm."</h1>";
        }
    }
}
$obj=new controller;

?>