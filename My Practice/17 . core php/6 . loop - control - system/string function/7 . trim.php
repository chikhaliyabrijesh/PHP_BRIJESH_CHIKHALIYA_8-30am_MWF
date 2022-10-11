<?php

$str = "hello brijesh";
echo $str."<br>";

echo trim($str,"hello")."<br>";
echo trim($str,"brijesh")."<br>";
echo ltrim($str,"hello")."<br>";
echo rtrim($str,"brijesh");



?>