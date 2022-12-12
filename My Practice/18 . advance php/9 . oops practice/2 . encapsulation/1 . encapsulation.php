<?php  
class person  
{  
public $name;  
public $age;  
function __construct($n, $a)  
{  
$this->name=$n;  
$this->age=$a;  
}  
public function setAge($ag)  
 {  
   
$this->ag=$ag;  
   
}  
   
public function display()  
   
{  
   
echo  "welcome ".$this->name."<br/>";  
   
return $this->age-$this->ag;  
   
}  
   
}  
   
$person=new person("sonoo",28);  
   
$person->setAge(1);  
   
echo "You are ".$person->display()." years old";  
   
?>  