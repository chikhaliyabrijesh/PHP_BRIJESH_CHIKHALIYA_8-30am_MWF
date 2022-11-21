<?php

class factorial
{
    public function __construct()
    {
        $no = 10;

        $f = 1;
        for($i=1 ; $i<=$no ; $i++)
        {
            $f = $f * $i;
        }
        echo "The Factorial Of Number Is : ".$f;
    }
}
$obj = new factorial; 

?>