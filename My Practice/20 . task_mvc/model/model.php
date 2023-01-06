<?php

class model
{
    public $connection;
    public function __construct()
    {
        try
        {
            $this->connection=new mysqli("localhost","root","","taskdb");
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

    // create member function for show all data
    public function showalldata($table)
    {
        $select="select * from $table";
        $execute=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($execute))
        {
            $arr[]=$fetch;
        }
        return $arr;
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
    public function updatedata($table,$path,$pnm,$price,$ctg,$column,$product_id)
    {
        $update="update $table set product_image='$path',product_name='$pnm',price='$price',category='$ctg' where $column='$product_id'";
        $execute=mysqli_query($this->connection,$update);
        return $execute;
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

}


?>