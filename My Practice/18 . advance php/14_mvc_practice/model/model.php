<?php

class model
{
    public $connection;
    public function __construct()
    {
        session_start();
        try
        {
            $this->connection=new mysqli("localhost","root","","crud_operation");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            // die(mysqli_error($this->connection,$e));
            echo "connection not stablished";
        }
    }
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

    //create amember function for login as customer 
    public function logincustomer($table,$email,$pass)
    {
        $select="select * from $table where email='$email' and password='$pass'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $num_rows=mysqli_num_rows($execute);
        
        if($num_rows>0)
        {
            $_SESSION["register_id"]=$fetch["register_id"];
            $_SESSION["fname"]=$fetch["first_name"];
            $_SESSION["email"]=$fetch["email"];

            return true;
        }
        else
        {
            return false;
        }
    }

    // create member function for forgetpassword

    public function frgpassword($table,$column,$column1,$email)
    {
        $select="select $column from $table where $column1='$email'";
        $execute=mysqli_query($this->connection,$select);
        $num_rows=mysqli_num_rows($execute);
        $fetch=mysqli_fetch_array($execute);
        if($num_rows>0)
        {
            $pass=base64_decode($fetch["password"]);
            return $pass;
        }
        else
        {
            return false;
        }
    }

    // create function for change password
    public function chngpassword($table,$column,$id,$opass,$npass,$cpass,$register_id)
    {   
        $select="select $column from $table where $id='$register_id'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $pass=$fetch["password"];
        if($pass==$opass && $npass==$cpass)
        {
            $update="update $table set $column='$npass' where $id='$register_id'";
            $execute=mysqli_query($this->connection,$update);
            return $execute; 
        }
        else
        {
            return false;
        }
    }

    // create member function for join data or manage profile
    public function joindata($table,$table1,$table2,$where,$where1,$column,$register_id)
    {
        $select="select * from $table join $table1 on $where join $table2 on $where1 where $column='$register_id'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $arr[]=$fetch;
        return $arr;
    }

    // create mamber function for delete profile
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

    // create a logout

    public function logout()
    {
        unset($_SESSION["register_id"]);
        unset($_SESSION["fname"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
} 

?>