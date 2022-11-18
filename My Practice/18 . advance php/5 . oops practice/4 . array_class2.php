<?php

class name
{
    public function test()
    {
        $arr = array("Brijesh","Akshar","Anant","Aakash","Sagar","Parth");
        foreach($arr as $value)
        {
            echo "Name is : ".$value."<br>";
        } 
    }
}
$obj = new name;
$obj -> test();


?>