<?php

class swap
{
    public function swapping()
    {
        $a = 10;
        $b = 20;

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "After Swapping : <br><br> a = ".$a."<br><br>"."b = ".$b;
    }
}
$obj = new swap;
$obj -> swapping();

?>