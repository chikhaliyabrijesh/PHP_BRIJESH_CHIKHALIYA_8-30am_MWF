<?php

// What Happen, If Constructor Is Defined As Private Or Protected?

// Constructor is used for object creation and initialization.If constructor is declared private that means constructor cannot be called outside the scope of class .so the objects of class having private constructor can neither be created nor can be initialized.

// The purpose of a private or protected constructor is to prevent the class from being instantiated from outside of the class.

// You could create a public static function in the class that returns a new object, but you cannot create it directly if you want to have the constructor be protected or private. You must have something declared as public or you cannot use the class.

?>