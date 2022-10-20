<?php

session_start();
unset($_SESSION["email"]);
session_destroy();

echo "<h2 align='center' style='color:red'>You Are Logout Successfully</h2>";
header("refresh:4,login.php");

?>