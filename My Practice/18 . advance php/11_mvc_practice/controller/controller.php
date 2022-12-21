<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        // insert or store data in contact
        if(isset($_POST["addcontact"]))
        {
            date_default_timezone_set("Asia/calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["email"];
            $mob=$_POST["mobile"];
            $msg=$_POST["message"];
            $datetime=date("d/m/Y H:i:s a");
            $data=array("first_name"=>$fnm,"last_name"=>$lnm,"email"=>$em,"mobile"=>$mob,"message"=>$msg,"date_time"=>$datetime);
            $chk=$this->insertdata('tbl_contact',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks For Contact With Us')
                window.location='contact-us';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong')
                window.location='contact-us';
                </script>";
            }
        }

        // insert or store data in register
        if(isset($_POST["register"]))
        {
            date_default_timezone_set("Asia/calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["email"];
            $pw=$_POST["pass"];
            $mob=$_POST["mobile"];
            $datetime=date("d/m/Y H:i:s a");
            $data=array("first_name"=>$fnm,"last_name"=>$lnm,"email"=>$em,"password"=>$pw,"mobile"=>$mob,"date_time"=>$datetime);
            $chk=$this->insertdata('tbl_register',$data);
            if($chk)
            {
                echo "<script>
                alert('Account Created Successfully')
                window.location='create-account';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong')
                window.location='create-account';
                </script>";
            }
        }
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/create-account':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;

                case '/checkout-cart':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("checkout.php");
                    require_once("footer.php");
                    break;

                case '/products':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("products.php");
                    require_once("footer.php");
                    break;

                case '/single':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("single.php");
                    require_once("footer.php");
                    break;

                case '/typography':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("typography.php");
                    require_once("footer.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}
$obj = new controller;

?>