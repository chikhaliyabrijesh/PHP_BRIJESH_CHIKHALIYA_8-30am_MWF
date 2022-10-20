<?php

session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<script>
alert('You are successfully logout')
window.location='login.php';
</script>";

?>