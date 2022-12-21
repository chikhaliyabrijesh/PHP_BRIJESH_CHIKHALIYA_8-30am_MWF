<?php

class model
{
    public $connection;
    public function __construct()
    {
        try
        {
            $this->connection=new mysqli("localhost","root","","crudmvcapp");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            // die(mysqli_error($this->connection,$e));
            echo "connection is not stablished";
        }
    }

    // create member function for insert all data
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
}


?>