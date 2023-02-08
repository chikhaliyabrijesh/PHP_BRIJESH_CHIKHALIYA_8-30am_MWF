<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        // logic for insert data in contact table
        if(isset($_POST["addcontact"]))
        {
            date_default_timezone_set("Asia,calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["email"];
            $mob=$_POST["phone"];
            $sub=$_POST["subject"];
            $msg=$_POST["message"];
            $datetime=date("d/m/Y H:i:s a");

            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"mobile"=>$mob,"subject"=>$sub,"message"=>$msg,"datetime"=>$datetime);
            $chk=$this->insertdata('tbl_contact',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks For Contact With Us')
                window.location='contactus';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong')
                window.location='contactus';
                </script>";
            }
        }

        // logic for insert data into register table 
        if(isset($_POST["register"]))
        {
            date_default_timezone_set("Asia/calcutta");
            $nm=$_POST["name"];
            $mob=$_POST["phone"];
            $em=$_POST["email"];
            $pw=base64_encode($_POST["pass"]);
            $cpw=base64_encode($_POST["cpass"]);
            $datetime=date("d/m/Y H:i:s a");

            if($pw==$cpw)
            {
                $data=array("name"=>$nm,"mobile"=>$mob,"email"=>$em,"password"=>$pw,"datetime"=>$datetime);
                $chk=$this->insertdata('tbl_register',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Registration Successfully')
                    window.location='register';
                    </script>";
                }
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong Try Again')
                window.location='Register';
                </script>";
            }
        }

        // logic for insert data in Add Book table
        if(isset($_POST["addbook"]))
        {
            $bnm=$_POST["bname"];
            $cnm=$_POST["cname"];
            $anm=$_POST["aname"];
            $qty=$_POST["qty"];
            $rs=$_POST["price"];

            $data=array("bookname"=>$bnm,"categoryid"=>$cnm,"autherid"=>$anm,"quantity"=>$qty,"price"=>$rs);
            $chk=$this->insertdata('tbl_addbook',$data);
            if($chk)
            {
                echo "<script>
                alert('Add Book Successfully')
                window.location='managebook';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong')
                window.location='addbook';
                </script>";
            }
        }


         // fetch category and auther in addbook form
        $category=$this->selectalldata('tbl_categories');
        $auther=$this->selectalldata('tbl_auther');
        $showbook=$this->selectalldata('tbl_addbook');


        // logic for login students
        if(isset($_POST["login"]))
        {
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $chk=$this->loginstudents('tbl_register',$email,$pass);
            if($chk)
            {
                echo "<script>
                alert('You Are Logged In Successfully')
                window.location='./';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Your Email And Password Are Incorrect Try Again')
                window.location='login';
                </script>";
            }
        }

        // logic for edit one product data
        if(isset($_GET["editdataid"]))
        {
            $id=$_GET["editdataid"];
            $editupddata=$this->editdata('tbl_addbook','bookid',$id);
        }

        // logic for update data
        if(isset($_POST["updproduct"]))
        {
            $bookid=$_GET["editdataid"];
            $bnm=$_POST["bname"];
            $ctg=$_POST["category"];
            $auther=$_POST["auther"];
            $qty=$_POST["qty"];
            $price=$_POST["price"];
            

            $chk=$this->updatedata('tbl_addbook',$bnm,$ctg,$auther,$qty,$price,'bookid',$bookid);
            if($chk)
            {
                echo "<script>
                alert('Book Updated Successfully')
                window.location='managebook';
                </script>";
            }
        }

        // logic for delete data
        if(isset($_GET["deleteid"]))
        {
            $id=$_GET["deleteid"];
            $id=array("bookid"=>$id);
            $deldata=$this->deletedata('tbl_addbook',$id);
            if($deldata)
            {
                echo "<script>
                alert('Data Deleted Successfully')
                window.location='./managebook';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong Try Again')
                window.location='./managebook';
                </script>";
            }
        }

         // logic for read data
         if(isset($_GET["readdataid"]))
         {
             $id=$_GET["readdataid"];
             $readdata=$this->readdata('tbl_addbook','bookid',$id);
         }

         // logic for change password
         if(isset($_POST["chng"]))
         {
             $registerid=$_SESSION["registerid"];
             $opass=base64_encode($_POST["opass"]);
             $npass=base64_encode($_POST["npass"]);
             $cpass=base64_encode($_POST["cpass"]);
 
             $chk=$this->chngpassword('tbl_register','password','registerid',$opass,$npass,$cpass,$registerid);
             if($chk)
             {
                 unset($_SESSION["registerid"]);
                 unset($_SESSION["email"]);
                 unset($_SESSION["name"]);
                 session_destroy();
                 echo "<script>
                 alert('Your password successfully changed')
                 window.location='login';
                 </script>";
             }
             else
             {
                 echo "<script>
                 alert('Your opass , npass and confirm password does not matched try again')
                 window.location='changepassword';
                 </script>";
             }
         }

        // logic for logout
        if(isset($_GET["logout-here"]))
        {
            $log=$this->logout();
            if($log)
            {
                echo "<script>
                alert('You Are Successfully Logout')
                Window.location='./';
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

                case '/aboutus':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("about.php");
                    require_once("footer.php");
                    break;

                case '/contactus':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contact.php");
                    require_once("footer.php");
                    break;

                case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/bookscategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("bookscategory.php");
                    require_once("footer.php");
                    break;

                case '/addbook':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("addbook.php");
                    require_once("footer.php");
                    break;

                case '/managebook':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("managebook.php");
                    require_once("footer.php");
                    break;

                case '/readdata':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("readdata.php");
                    require_once("footer.php");
                    break;

                case '/editdata':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("updatedata.php");
                    require_once("footer.php");
                    break;


                case '/changepassword':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("changepassword.php"); 
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
