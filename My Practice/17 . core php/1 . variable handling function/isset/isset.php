<?php

if(isset($_POST["sub"]))
{
    $nm=$_POST["nm"];
    echo "<h3 align='center'>Your Name Is : $nm</h3>";
}

?>

<html>
    <body>
        <center>
            <form method="post">
                Enter Your Name : <input type="text" name="nm" placeholder="Enter Your Name *">
                <br><br>
                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>
