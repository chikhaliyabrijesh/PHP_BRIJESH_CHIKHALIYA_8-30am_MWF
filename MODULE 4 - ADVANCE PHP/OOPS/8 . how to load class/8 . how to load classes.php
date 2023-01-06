<?php

// If a class is not declared, PHP will run a function (one global function; not a class method) named "__autoload()" if there is one declared, and will retry to load the class again. It is expected of the __autoload() function to do whatever is necesary to load the class given to it as a first argument.

spl_autoload_register(function($class_name)
{
    include 'classes/'.$class_name . '.php';
});

$obj = new addition();
$obj = new multiply();

?>