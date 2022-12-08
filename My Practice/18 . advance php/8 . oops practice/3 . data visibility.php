<?php

class A
{
    public $public="hi i am public";
    private $private="hi i am private";
    protected $protected="hi i am protected";
    public function display()
    {
        echo $this->public."<br>".$this->private."<br>".$this->protected;
    }
}
$obj=new A;
echo $obj->public; //work
echo $obj->private; //not work
echo $obj->protected; //not work
$obj->display();

?>