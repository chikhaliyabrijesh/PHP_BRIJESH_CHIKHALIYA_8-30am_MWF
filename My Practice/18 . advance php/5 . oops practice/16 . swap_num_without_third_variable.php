<?php

class swap
{
    public function swapping()
    {
        $a = 10;
        $b = 20;

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;

        echo "After Swapping : <br><br> a = ".$a."<br><br>"."b = ".$b;
    }
}
$obj = new swap;
$obj -> swapping();

?>