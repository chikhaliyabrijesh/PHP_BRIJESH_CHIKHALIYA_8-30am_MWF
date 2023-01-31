<?php
class model
{
    public $connection;
    public function __construct()
    {
        session_start();
        try
        {
            $this->connection=new mysqli("localhost","root","","project_mvc");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            // die(mysqli_error($this->connection,$e));
            echo "connection not stablished";
        }
    }

    // create a member function for insert data
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

    // create a member function for select data from country,state,city table
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
            $_SESSION["fname"]=$fetch["firstname"];
            $_SESSION["email"]=$fetch["email"];

            return true;
        }
        else
        {
            return false;
        }
    }
        
    // create member function for forgot password
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
        unset($_SESSION["fname"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }

    // create a member function for join data OR manage profile
    public function joindata($table,$table1,$where,$table2,$where1,$table3,$where2,$column,$registerid)
    {
        $select="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2 where $column='$registerid'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $arr[]=$fetch;
        return $arr;
    }

    //create member function for update data
    public function updatedata($table,$path,$fnm,$lnm,$dob,$email,$mob,$edu,$uni,$add,$ctry,$st,$ct,$column,$registerid) 
    {
        $update="update $table set photo='$path',firstname='$fnm',lastname='$lnm',dob='$dob',email='$email',mobile='$mob',education='$edu',university='$uni',address='$add',country='$ctry',state='$st',city='$ct' where $column='$registerid'";
        $execute=mysqli_query($this->connection,$update);
        return $execute;
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
}


?>