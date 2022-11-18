<?php

class name
{
    public function test()
    {
        $arr = array("Brijesh","Akshar","Anant","Aakash","Sagar","Parth");
        
        if(in_array("Brijesh",$arr))
        {
            echo "This user is available";
        }
        else
        {
            echo "This user is not available";
        }
    }
}
$obj = new name;
$obj -> test();


?>