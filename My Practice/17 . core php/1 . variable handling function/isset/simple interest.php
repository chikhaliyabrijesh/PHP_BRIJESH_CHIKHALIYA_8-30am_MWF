<?php

if(isset($_POST["sub"]))
{
    $p=$_POST["pnm"];
    $y=$_POST["ynm"];
    $r=$_POST["rnm"];

    $si = $p * $y * $r / 100;

    echo "<h1 align='center'> the simple interest = $si </h1>";
}


?>

<html>
    <body>
        <center>
            <form method="post">
                Enter principle amt : <input type="text" name="pnm" placeholder="Enter principle amt *">
                <br><br>
                Enter number of years : <input type="text" name="ynm" placeholder="Enter no of years *">
                <br><br>
                Enter the ROI : <input type="text" name="rnm" placeholder="Enter the ROI *">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>