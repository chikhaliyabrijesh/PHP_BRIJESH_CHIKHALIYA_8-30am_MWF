<?php
error_reporting(0);
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        parent::__construct();

        // insert data
        if(isset($_POST["addproduct"]))
        {
            $tmp_name=$_FILES["pimage"]["tmp_name"];
            $path="uploads/products/".$_FILES["pimage"]["name"];
            move_uploaded_file($tmp_name,$path);
            $pnm=$_POST["pname"];
            $price=$_POST["price"];
            $ctg=$_POST["category"];
        
            $data=array("product_image"=>$path,"product_name"=>$pnm,"price"=>$price,"category"=>$ctg);
            $chk=$this->insertdata('tbl_products',$data);
            if($chk)
            {
                echo "<script>
                alert('Product Added Successfully')
                window.location='./';
                </script>";
            }
        }

        // logic for show data
        $shwprod=$this->showalldata('tbl_products');

        // logic for read data
        if(isset($_GET["readdataid"]))
        {
            $id=$_GET["readdataid"];
            $readdata=$this->readdata('tbl_products','product_id',$id);
        }


        // logic for fetch data
        // if(isset($_GET["updid"]))
        // {
        //     $id=$_GET["updid"];
        //     $id=array("product_id"=>$id);
        //     $shwdata=$this->fetchdata('tbl_products',$id);
        // }

        // logic for update data
        // if(isset($_GET["updid"]))
        // {
        //     $id=$_GET["updid"];
        //     $upddata=$this->updatedata('tbl_products','product_image','product_name','price','category','product_id',$id);
        //     if($upddata)
        //     {
        //         echo "<script>
        //         alert('Data Updated Successfully')
        //         window.location='./update';
        //         </script>";
        //     }
        //     else
        //     {
        //         echo "<script>
        //         alert('Something Went Wrong Try Again')
        //         window.location='./';
        //         </script>";
        //     }
        // }

        // logic for delete data
        if(isset($_GET["deleteid"]))
        {
            $id=$_GET["deleteid"];
            $id=array("product_id"=>$id);
            $deldata=$this->deletedata('tbl_products',$id);
            if($deldata)
            {
                echo "<script>
                alert('Data Deleted Successfully')
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
                    require_once("addproduct.php");
                    require_once("footer.php");
                    break;

                case '/readdata':
                    require_once("index.php");
                    require_once("readdata.php");
                    require_once("footer.php");
                    break;

                default:
                    break;
            }
        }
    }
}
$obj=new controller;

?>