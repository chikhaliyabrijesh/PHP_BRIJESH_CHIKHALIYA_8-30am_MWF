<?php

class fibonacci
{
    public function fibonacci()
    {
        $a = 0;
        $b = 1;

        $no = 20;

        echo "The Fibonacci Sereis Is : "."$a&nbsp"."$b&nbsp";

        for($i=2 ; $i<=$no ; $i++)
        {
            $c = $a + $b;
            echo "$c&nbsp";
            $a = $b;
            $b = $c;
        }
    }
}
$obj = new fibonacci;
$obj -> fibonacci();


?>