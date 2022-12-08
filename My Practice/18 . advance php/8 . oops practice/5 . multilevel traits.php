<?php

trait addition
{
    public function add($a,$b)
    {
        return $a + $b;
    }
}
trait multiply
{
    public function mul($a,$b)
    {
        return $a * $b;
    }
}
class result
{
    use addition;
    use multiply;

    public function calculate($a,$b)
    {
        echo "Result Of Addition Is : ".$this->add($a,$b)."<br><br>";

        echo "Result of Multiplication Is : ".$this->mul($a,$b);
    }
}
$obj = new result;
$obj->calculate(15,15);


?>