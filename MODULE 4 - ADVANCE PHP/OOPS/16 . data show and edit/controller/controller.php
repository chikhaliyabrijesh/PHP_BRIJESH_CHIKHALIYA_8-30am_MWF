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


        // logic for edit one product data
        if(isset($_GET["editdataid"]))
        {
            $id=$_GET["editdataid"];
            $editupddata=$this->editdata('tbl_products','product_id',$id);
        }

        // logic for update data
        if(isset($_POST["updproduct"]))
        {
            $product_id=$_GET["editdataid"];
            $tmp_name=$_FILES["pimage"]["tmp_name"];
            $path="uploads/products/".$_FILES["pimage"]["name"];
            move_uploaded_file($tmp_name,$path);
            $pnm=$_POST["pname"];
            $price=$_POST["price"];
            $ctg=$_POST["category"];

            $chk=$this->updatedata('tbl_products',$path,$pnm,$price,$ctg,'product_id',$product_id);
            if($chk)
            {
                echo "<script>
                alert('Products Updated Successfully')
                window.location='./';
                </script>";
            }
        }

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

                case '/editdata':
                    require_once("index.php");
                    require_once("updatedata.php");
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