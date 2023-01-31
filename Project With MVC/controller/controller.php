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

        // logic for insert data in feedback
        if(isset($_POST["addfeedback"]))
        {
            date_default_timezone_set("Asia,calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["email"];
            $phone=$_POST["phone"];
            $star=$_POST["star"];
            $comment=$_POST["comment"];
            $datetime=date("d/m/Y H:i:s a");

            $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"mobile"=>$phone,"star"=>$star,"comment"=>$comment,"datetime"=>$datetime);

            $chk=$this->insertdata('tbl_feedback',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks For Your Valuable Feedback')
                window.location='feedback';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong Try Again')
                window.location='feedback';
                </script>";
            }
        }

        // logic for insert data in cvform table
        if(isset($_POST["submit"]))
        {
            $tmpname=$_FILES["img"]["tmp_name"];
            $path="uploads/students/".$_FILES["img"]["name"];
            move_uploaded_file($tmpname,$path);
            $dob=$_POST["dob"];
            $nm=$_POST["name"];
            $em=$_POST["email"];
            $mob=$_POST["phone"];
            $gender=$_POST["gender"];
            $edu=$_POST["edu"];
            $skill=$_POST["skill"];
            $dept=$_POST["dept"];
            $exp=$_POST["experience"];
            $loc=$_POST["location"];
            $jobtime=$_POST["time"];
            $sal=$_POST["salary"];
            $ctry=$_POST["country"];
            $st=$_POST["state"];
            $ct=$_POST["city"];
            $data=array("photo"=>$path,"dob"=>$dob,"name"=>$nm,"email"=>$em,"mobile"=>$mob,"gender"=>$gender,"education"=>$edu,"skill"=>$skill,"department"=>$dept,"experience"=>$exp,"location"=>$loc,"jobtime"=>$jobtime,"expectedsalary"=>$sal,"country"=>$ctry,"state"=>$st,"city"=>$ct);
            $chk=$this->insertdata('tbl_cvform',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks For Submit Your CV')
                window.location='cvform';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('Something went wrong Try Again')
                window.location='cvform';
                </script>";
            }
        }


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
            date_default_timezone_set("Asia,calcutta");
            // upload image
            $tmpname=$_FILES["img"]["tmp_name"];
            $path="uploads/students/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);

            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $dob=$_POST["dob"];
            $gender=$_POST["gender"];
            $em=$_POST["email"];
            $pw=base64_encode($_POST["pass"]);
            $cpw=base64_encode($_POST["cpass"]);
            $mob=$_POST["phone"];
            $edu=$_POST["edu"];
            $uni=$_POST["uni"];
            $address=$_POST["address"];
            $country=$_POST["country"];
            $state=$_POST["state"];
            $city=$_POST["city"];
            $datetime=date("d/m/Y H:i:s a");

            if($pw==$cpw)
            {
                $data=array("photo"=>$path,"firstname"=>$fnm,"lastname"=>$lnm,"dob"=>$dob,"gender"=>$gender,"email"=>$em,"password"=>$pw,"mobile"=>$mob, "education"=>$edu,"university"=>$uni,"address"=>$address,"country"=>$country,"state"=>$state,"city"=>$city,"datetime"=>$datetime);
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

        // fetch country,state,city in register form
        $country=$this->selectalldata('tbl_country');
        $state=$this->selectalldata('tbl_state');
        $city=$this->selectalldata('tbl_city');

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

        // logic for forgot password
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
 
            }catch (Exception $e) {
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
            $registerid=$_SESSION["registerid"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);

            $chk=$this->chngpassword('tbl_register','password','registerid',$opass,$npass,$cpass,$registerid);
            if($chk)
            {
                unset($_SESSION["registerid"]);
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

        // logic for manage profile
        if(isset($_SESSION["registerid"]))
        {
            $registerid=$_SESSION["registerid"];
            $shwprof=$this->joindata('tbl_register','tbl_country','tbl_register.country=tbl_country.countryid','tbl_state','tbl_register.state=tbl_state.stateid','tbl_city','tbl_register.city=tbl_city.cityid','registerid',$registerid);
        }

        // logic for update profile
        if(isset($_POST["upd"]))
        {
            $register_id=$_GET["updateprofileid"];
            $tmp_name=$_FILES["img"]["tmp_name"];
            $path="uploads/students/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $dob=$_POST["dob"];
            $email=$_POST["email"];
            $mob=$_POST["phone"];
            $edu=$_POST["edu"];
            $uni=$_POST["uni"];
            $add=$_POST["address"];
            $ctry=$_POST["country"];
            $st=$_POST["state"];
            $ct=$_POST["city"];

            $chk=$this->updatedata('tbl_register',$path,$fnm,$lnm,$dob,$email,$mob,$edu,$uni,$add,$ctry,$st,$ct,'registerid',$registerid);

            if($chk)
            {
                echo "<script>
                alert('Profile Updated Successfully')
                window.location='./';
                </script>";
            } 
        }

        // logic for delete account
        if(isset($_GET["deleteprofileid"]))
        {
            $id=$_GET["deleteprofileid"];
            $id=array("registerid"=>$id);
            $chk=$this->deletedata('tbl_register',$id);
            if($chk)
            {
                unset($_SESSION["registerid"]);
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

                case '/procedure':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("procedure.php");
                    require_once("footer.php");
                    break;

                case '/coordinators':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("coordinators.php");
                    require_once("footer.php");
                    break;

                case '/companylist':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("companylist.php");
                    require_once("footer.php");
                    break;

                    case '/information':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("information.php");
                        require_once("footer.php");
                        break;

                    case '/tutorial':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("tutorial.php");
                        require_once("footer.php");
                        break;

                    case '/cvform':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("cvform.php");
                        require_once("footer.php");
                        break;

                    case '/feedback':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("feedback.php");
                        require_once("footer.php");
                        break;

                    case '/login':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("login.php");
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

                    case '/register':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("navbar.php");
                        require_once("register.php");
                        require_once("footer.php");
                        break;


                default :
                    break;
            }
        }
    }
}
$obj=new controller;



?>