<?php

require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        if(isset($_POST["addcontact"]))
        {
            
            //Load Composer's autoloader
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = true;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'brijeshchikhaliya1@gmail.com';                     //SMTP username
                $mail->Password   = 'awayzfhnvjroyfhc';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST["email"], 'Mailer');
                $mail->addAddress('brijeshchikhaliya1@gmail.com','Brijesh Chikhaliya');     //Add a recipient
                
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Contact Us For Enquiry Customers Details';
                $mail->Body    = "<img src='https://cdn.dribbble.com/users/1334391/screenshots/5910177/mail-sending.gif'>"."<p><b>First Name : <b>".$_POST["fname"]."</p>"."<p><b>Last Name : <b>".$_POST["lname"]."</p>"."<p><b>Email : <b>".$_POST["email"]."</p>"."<p><b>Phone No : <b>".$_POST["phone"]."</p>"."<p><b>Address : <b>".$_POST["address"]."</p>"."<p><b>Message : <b>".$_POST["message"]."</p>"."<p><b>Company Address : <b>"."TOPS TECHNOLOGY PVT LTD,<br>Jalaram Plot - 2,<br>Near Indira Circle,<br>Above SBI Bank,<br>Rajkot-360005"."</p>"."<p><b>Email Us : <b>"."<a href='mailto:info@tops-int.com'>info@tops-int.com</a>"."</p>";


                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo "<script>
                alert('Thanks For Contact With Us Get Your Email will contact with You Soon!')
                window.location='contact';
                </script>";

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


            date_default_timezone_set("Asia/calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["email"];
            $pn=$_POST["phone"];
            $add=$_POST["address"];
            $msg=$_POST["message"];
            $datetime=date("d/m/Y H:i:s a");
            $data=array("first_name"=>$fnm,"last_name"=>$lnm,"email"=>$em,"phone"=>$pn,"address"=>$add,"message"=>$msg,"date_time"=>$datetime);
            $chk=$this->insertdata('tbl_contact',$data);
            // if($chk)
            // {
            //     echo "<script>
            //     alert('Thanks For Contact With Us')
            //     window.location='contact';
            //     </script>";
            // }
            // else
            // {
            //     echo "<script>
            //     alert('Something Went Wrong')
            //     window.location='contact';
            //     </script>";
            // }

        }



        if(isset($_POST["register"]))
        {

            //Load Composer's autoloader
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = true;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'brijeshchikhaliya1@gmail.com';                     //SMTP username
                $mail->Password   = 'awayzfhnvjroyfhc';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST["email"], 'Mailer');
                $mail->addAddress('brijeshchikhaliya1@gmail.com','Brijesh Chikhaliya');     //Add a recipient
                
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Contact Us For Enquiry Customers Details';
                $mail->Body    = "<img src='https://i.pinimg.com/originals/b9/7d/c2/b97dc288d71e7938c1ce8b7faacdc9ac.gif'>"."<p><b>Thanks For Create Account With Us : </b>"."1. Thanks for signing up/ joining us

                This is the quintessential Thank you email. Whatever you do, make sure you set this one up before any other type.<br>
                
                When someone registers for your product/service, they engage with your business.
                <br>
                This is why you should be there on Day 1 to thank them for signing up or joining you.
                <br>
                Use this email as an opportunity to say something that does not require further action from them.
                <br>
                At the beginning of the joint journey with your customers, make sure that you thank them for being there. So, this first email also works as a welcome email"."</p>";


                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo "<script>
                alert('Thanks For Create Account With Us!')
                window.location='register';
                </script>";

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


            date_default_timezone_set("Asia/calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $dob=$_POST["dob"];
            $pn=$_POST["phone"];
            $em=$_POST["email"];
            $pw=base64_encode($_POST["pass"]);
            $cpw=base64_encode($_POST["cpass"]);
            $gn=$_POST["gender"];
            $hb=implode(",",$_POST["chk"]);
            // upload image
            $tmp_name=$_FILES["img"]["tmp_name"];
            $path="uploads/customers/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);

            $add=$_POST["address"];
            $st=$_POST["state"];
            $ct=$_POST["city"];
            $datetime=date("d/m/Y H:i:s a");

            if($pw==$cpw)
            {

                $data=array("first_name"=>$fnm,"last_name"=>$lnm,"dob"=>$dob,"phone"=>$pn,"email"=>$em,"password"=>$pw,"gender"=>$gn,"hobbies"=>$hb,"photo"=>$path,"address"=>$add,"state"=>$st,"city"=>$ct,"date_time"=>$datetime);
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
                alert('Something Went Wrong , Try Again')
                window.location='register';
                </script>";
            }

        }

        // fetch state in refister form
        $state=$this->selectalldata('state');
        // fetch city in refister form
        $city=$this->selectalldata('city');


        // login as customer logic
        if(isset($_POST["login"]))
        {
            $email=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $chk=$this->logincustomer('tbl_register',$email,$pass);
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

        // logic for forgetpassword
        if(isset($_POST["fpass"]))
        {

            $email=$_POST["email"];
            $pass=base64_decode($_POST["pass"]);

            $pass=$this->frgpassword('tbl_register','password','email',$email);

            //Load Composer's autoloader
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';
 
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = true;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'brijeshchikhaliya1@gmail.com';                     //SMTP username
                $mail->Password   = 'awayzfhnvjroyfhc';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($_POST["email"], 'Mailer');
                $mail->addAddress('brijeshchikhaliya1@gmail.com','Brijesh Chikhaliya');     //Add a recipient
                
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body    = "<p><b>Your password : </b>".$pass."</p>"; 
                
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo "<script>
                alert('Your Password Has Been Sent On Your Email')
                window.location='login';
                </script>";

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            // $email=$_POST["email"];
            // $pass=base64_decode($_POST["pass"]);

            // $pass=$this->frgpassword('tbl_register','password','email',$email);
            // if($pass)
            // {
            //     echo "<script>
            //     alert('Your Password Is :'+'$pass')
            //     window.location='login';
            //     </script>";
            // }
            // else
            // {
            //     echo "<script>
            //     alert('Your Account Is Not Register With Us Try Again')
            //     window.location='forgetpassword';
            //     </script>";
            // }
        } 

        // logic for change password
        if(isset($_POST["chng"]))
        {
            $register_id=$_SESSION["register_id"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);

            $chk=$this->chngpassword('tbl_register','password','register_id',$opass,$npass,$cpass,$register_id);
            if($chk)
            {
                unset($_SESSION["register_id"]);
                unset($_SESSION["email"]);
                unset($_SESSION["fname"]);
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

        // logout here
        if(isset($_GET["logout-here"]))
        {
            $log=$this->logout();
            if($log)
            {
                echo "<script>
                alert('You Are Successfully Logout')
                window.location='./';
                </script>";
            }
        }

        // manage customer profile
        if(isset($_SESSION["register_id"]))
        {
            $register_id=$_SESSION["register_id"];
            $shwprof=$this->joindata('tbl_register','state','city','tbl_register.state=state.state_id','tbl_register.city=city.city_id','register_id',$register_id);
        }

        // delete customer profile
        if(isset($_GET["deleteprofile_id"]))
        {
            $id=$_GET["deleteprofile_id"];
            $id=array("register_id"=>$id);
            $chk=$this->deletedata('tbl_register',$id);
            if($chk)
            {
                unset($_SESSION["register_id"]);
                unset($_SESSION["email"]);
                unset($_SESSION["fname"]);
                session_destroy();
                echo "<script>
                alert('Your Profile Successfully Deleted')
                window.location='login';
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

                case '/groceries':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("groceries.php");
                    require_once("footer.php");
                    break;

                case '/household':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("household.php");
                    require_once("footer.php");
                    break;

                case '/personalcare':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("personalcare.php");
                    require_once("footer.php");
                    break;

                case '/packagedfoods':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("packagedfoods.php");
                    require_once("footer.php");
                    break;

                case '/beverages':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("beverages.php");
                    require_once("footer.php");
                    break;

                case '/gourmet':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("gourmet.php");
                    require_once("footer.php");
                    break;

                case '/offers':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("offers.php");
                    require_once("footer.php");
                    break;
    
                case '/contact':
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

                case '/about-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("about.php");
                    require_once("footer.php");
                    break;

                case '/checkout':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("checkout.php");
                    require_once("footer.php");
                    break;

                case '/faq':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("faq.php");
                    require_once("footer.php");
                    break;

                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("login.php");
                    require_once("footer.php");
                    break;

                case '/register':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("register.php");
                    require_once("footer.php");
                    break;

                case '/forgetpassword':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                    break;

                case '/changepassword':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("changepassword.php"); 
                    require_once("footer.php");
                    break;

                    case '/manageprofile':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("manageprofile.php"); 
                    require_once("footer.php");
                    break;

                case '/short-codes':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("short-codes.php");
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