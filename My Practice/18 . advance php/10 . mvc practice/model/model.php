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
            // die(mysqli_error($this->connection));
            echo "connection is not stablished";
        }
    }
}

?>