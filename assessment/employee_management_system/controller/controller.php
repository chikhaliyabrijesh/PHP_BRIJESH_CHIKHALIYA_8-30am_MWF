<?php
require_once("model/model.php");
error_reporting(0);
class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        // logic for insert data into register table 
        if(isset($_POST["addemployee"]))
        {
            date_default_timezone_set("Asia/calcutta");
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $gender=$_POST["gender"];
            $em=$_POST["email"];
            $pw=base64_encode($_POST["pass"]);
            $cpw=base64_encode($_POST["cpass"]);
            $mob=$_POST["mobile"];
            $address=$_POST["address"];
            $datetime=date("d/m/Y H:i:s a");

            if($pw==$cpw)
            {
                $data=array("firstname"=>$fnm,"lastname"=>$lnm,"gender"=>$gender,"email"=>$em,"password"=>$pw,"mobile"=>$mob,"address"=>$address,"datetime"=>$datetime);
                $chk=$this->insertdata('addemployee',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Add Employee Successfully')
                    window.location='viewemployee';
                    </script>";
                }
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong Try Again')
                window.location='addemployee';
                </script>";
            }
        }

        // logic for show data
        $showemp=$this->showalldata('addemployee');

        // logic for read data
        if(isset($_GET["readdataid"]))
        {
            $id=$_GET["readdataid"];
            $readdata=$this->readdata('addemployee','empid',$id);
        }

        // logic for edit one product data
        if(isset($_GET["editdataid"]))
        {
            $id=$_GET["editdataid"];
            $editupddata=$this->editdata('addemployee','empid',$id);
        }

        // logic for update data
        if(isset($_POST["updemployee"]))
        {
            $empid=$_GET["editdataid"];
            $fnm=$_POST["fname"];
            $lnm=$_POST["lname"];
            $em=$_POST["email"];
            $mob=$_POST["mobile"];
            $add=$_POST["address"];

            $chk=$this->updatedata('addemployee',$fnm,$lnm,$em,$mob,$add,'empid',$empid);
            if($chk)
            {
                echo "<script>
                alert('Employee Updated Successfully')
                window.location='./';
                </script>";
            }
        }

        // logic for delete data
        if(isset($_GET["deleteid"]))
        {
            $id=$_GET["deleteid"];
            $id=array("empid"=>$id);
            $deldata=$this->deletedata('addemployee',$id);
            if($deldata)
            {
                echo "<script>
                alert('Employee Deleted Successfully')
                // window.location='./';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Went Wrong Try Again')
                window.location='./';
                </script>";
            }
        }
 


        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    break;

                case '/addemployee':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("addemployee.php");
                    break;

                case '/viewemployee':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("viewemployee.php");
                    break;

                case '/readdata':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("readdata.php");
                    break;

                case '/editdata':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("updatedata.php");
                    break;

                default:
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    break;
            }
        }
    }
}
$obj=new controller;

?>