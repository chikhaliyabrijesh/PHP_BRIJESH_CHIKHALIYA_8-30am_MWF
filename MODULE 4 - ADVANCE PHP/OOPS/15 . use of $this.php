<?php

// pseudo variable : A pseudo variable is used to call or access any variables globally inside of method.

// pseudo variable called through $this.

// The $this keyword is only available within a class. It does not exist outside of the class. If you attempt  to use the $this outside of a class, you will get an error.

// When you access an object property using the $this keyword, you use the $ with the this keyword only. And you do not use the $ with the property name. 
// For example: '$this->balance'.

  
class name 
{
    public $name="brijesh";
    public function display()
    {
        //echo $name;
        echo $this->name;
    }
} 

$obj=new name;
$obj->display();



?>