<?php

function add($a,$b)
{
    $c=$a+$b;
    return $c;
}
function sub($p,$q)
{
    $r=$p-$q;
    return $r;
}
function mul($m,$n)
{
    $o=$m*$n;
    return $o;
}
function div($x,$y)
{
    $z=$x-$y;
    return $z;
}
echo "The Addition = ".add(200,100)."<br><br>";
echo "The Substraction = ".sub(200,100)."<br><br>";
echo "The Multiplication = ".mul(200,100)."<br><br>";
echo "The Division = ".div(200,100)."<br><br>";

?>