<?php
class model
{
    public $connection;
    public function __construct()
    {
        session_start();
        try
        {
            $this->connection=new mysqli("localhost","root","","assessment_lms");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            // die(mysqli_error($this->connection,$e));
            echo "connection not stablished";
        }
    }

    // create member function for insert data
    public function insertdata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);

        $values=array_values($data);
        $values1=implode("','",$values);

        $insert="insert into $table($column1) values('$values1')";
        $query=mysqli_query($this->connection,$insert);

        return $query;
    }

     // create a member function for select data from category & auther table
     public function selectalldata($table)
     {
         $select="select * from $table";
         $execute=mysqli_query($this->connection,$select);
         while($fetch=mysqli_fetch_array($execute))
         {
             $arr[]=$fetch;
         }
         return $arr;
     }

    // create a member function for login 
    public function loginstudents($table,$email,$pass)
    {
        $select="select * from $table where email='$email' and password='$pass'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $num_rows=mysqli_num_rows($execute);

        if($num_rows>0)
        {
            $_SESSION["registerid"]=$fetch["registerid"];
            $_SESSION["name"]=$fetch["name"];
            $_SESSION["email"]=$fetch["email"];

            return true;
        }
        else
        {
            return false;
        }
    }

    // member function for delete data
    public function deletedata($table,$id)
    {
        $column=array_keys($id);
        $column1=implode(",",$column);

        $values=array_values($id);
        $values1=implode("','",$values);

        $delete="delete from $table where $column1='$values1'";
        $execute=mysqli_query($this->connection,$delete);
        return $execute;
    }

     // create member function for read all data
    public function readdata($table,$column,$id)
    {
        $select="select * from $table where $column='$id'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $arr[]=$fetch;
        return $arr;
    }

      // member function for fetch one data
      public function editdata($table,$column,$id)
      {   
          $select="select * from $table where $column='$id'";
          $execute=mysqli_query($this->connection,$select);
          $fetch=mysqli_fetch_array($execute);
          $arr[]=$fetch;
          return $arr;
      }
  
      // create member function for update data
      public function updatedata($table,$bnm,$ctg,$auther,$qty,$price,$column,$bookid)
      {
          $update="update $table set bookname='$bnm',categoryid='$ctg',autherid='$auther',quantity='$qty',price='$price' where $column='$bookid'";
          $execute=mysqli_query($this->connection,$update);
          return $execute;
      }


    // create member function for change password
    public function chngpassword($table,$column,$id,$opass,$npass,$cpass,$registerid)
    {
        $select="select $column from $table where $id='$registerid'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $pass=$fetch["password"];
        if($pass==$opass && $npass==$cpass)
        {
            $update="update $table set $column='$npass' where $id='$registerid'";
            $execute=mysqli_query($this->connection,$update);
            return $execute;
        }
        else
        {
            return false;
        }
    }

    // create member function for logout
    public function logout()
    {
        unset($_SESSION["registerid"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}
?>