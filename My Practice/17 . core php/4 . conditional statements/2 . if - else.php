<?php

if(isset($_POST["sub"]))
{
    $age = $_POST["age"];

    if($age > 18)
    {
        echo "<h2 align='center'>You Are Eligible For Driving Licence</h2>";
    }
    else
    {
        echo "<h2 align='center'>You Are Not Eligible For Driving Licence</h2>";
    } 
}

?>

<html>
    <body>
        <center>
            <form method="post">
                Enter Your Age : <input type="text" name="age" placeholder="Enter the age *">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>