<?php

// What are the magic methods in php ?

// PHP magic methods are special methods that are called automatically when certain conditions are met. 
// There are several magic methods in  PHP. 

// Every magic method follows certain rules :-

// (1).Every magic method starts with a double underscore (  __ ).
// (2).They are predefined and neither can be created nor removed.
// (3).Magic methods have reserved names and their name should not be used for other purposes.
// (4).Magic methods are automatically called when certain criteria are met.

// The following method names are considered magical:

// 1. __construct()
// 2. __destruct()
// 3. __call()
// 4. __callStatic()
// 5. __get()
// 6. __set()
// 7. __isset()
// 8. __unset()
// 9. __sleep()
// 10. __wakeup()
// 11. __serialize()
// 12. __unserialize()
// 13. __toString()
// 14. __invoke()
// 15. __set_state()
// 16. __clone()
// 17. __debugInfo()

class A
{
    public static function name()
    {
        $name = "My name is Brijesh";
        echo $name;
    }
}
A::name();

?>