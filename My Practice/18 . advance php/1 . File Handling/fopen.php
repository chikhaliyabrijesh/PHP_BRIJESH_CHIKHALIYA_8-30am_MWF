<?php

$file=fopen("brijesh.txt","r") or die("file does not exist");
if($file)
{
    echo "file opened successfully";
}
else
{
    echo "Something went wrong";
}

?>