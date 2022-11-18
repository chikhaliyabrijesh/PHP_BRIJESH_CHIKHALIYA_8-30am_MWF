<?php

class fibo
{
    public function fibonacci()
    {
        $no = 10;

        $a = 0;
        $b = 1;
            
        echo "The Fibonacci Sereis is : <br><br>".$a." ".$b ;

        for($i=1;$i<=$no;$i++)
        {
            $c = $a + $b;
            echo " $c ";
            $a = $b;
            $b = $c;
        }    
    }
}
$obj = new fibo;
$obj -> fibonacci();

?>

