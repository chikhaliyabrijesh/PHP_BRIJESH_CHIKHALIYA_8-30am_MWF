<?php

class circle
{
    public function area()
    {
        if(isset($_POST["sub"]))
        {
            $r = $_POST["radi"];
            $pi = 3.14;
            
            $area = 2 * $pi * $r;
            echo "<h2 align='center'>The area of circle is : ".$area."</h2>";
        }
    }
}
$obj = new circle;
$obj -> area();

?>

<html>
    <body>
        <center>
            <form method="post">
                <label>Enter a radius of circle</label>
                <input type="text" name="radi" placeholder="Enter a radius">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>