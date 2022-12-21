<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        if(isset($_POST["addcontact"]))
        {
            date_default_timezone_set('Asia/calcutta');
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

        if(isset($_POST["addcontact"]))
        {
            date_default_timezone_set('Asia/calcutta');
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

                case '/about-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("about.php");
                    require_once("footer.php");
                    break;

                case '/faqs':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("faq.php");
                    require_once("footer.php");
                    break;

                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;

                case '/products':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("product.php");
                    require_once("footer.php");
                    break;

                case '/preview':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("preview.php");
                    require_once("footer.php");
                    break;

                case '/preview-2':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("preview-2.php");
                    require_once("footer.php");
                    break;

                case '/preview-3':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("preview-3.php");
                    require_once("footer.php");
                    break;

                case '/preview-4':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("preview-4.php");
                    require_once("footer.php");
                    break;

                case '/preview-5':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("preview-5.php");
                    require_once("footer.php");
                    break;

                case '/preview-6':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("preview-6.php");
                    require_once("footer.php");
                    break;

                default :
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}
$obj=new controller;

?>