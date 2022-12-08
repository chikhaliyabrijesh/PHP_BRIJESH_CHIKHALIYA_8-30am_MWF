<?php

class fibonacci
{
    public static function fibo()
    {
        $a = 0;
        $b = 1;

        $no = 10;
        echo "The Fibonacci Sereis Is : ".$a."&nbsp".$b."&nbsp";
        for($i=1 ; $i<=$no ; $i++)
        {
            $c = $a + $b;
            echo "$c&nbsp";
            $a = $b;
            $b = $c;
        }
    }
}
fibonacci :: fibo();

?>