<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("1 . header.php");
                    require_once("2 . navbar.php");
                    require_once("3 . slider.php");
                    require_once("4 . content.php");
                    require_once("5 . footer.php");
                    break;
                
                default:
                    break;
            }
        }
    }
}
$obj=new controller;


?>