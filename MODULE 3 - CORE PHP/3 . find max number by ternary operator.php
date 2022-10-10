<?php

$a = 500;
$b = 800;
$c = 400;

$result = ($a > $b && $a > $c) ? ($a) : (($b > $c) ? ($b) : ($c));

echo "The Largest Number is : ".$result;

?>