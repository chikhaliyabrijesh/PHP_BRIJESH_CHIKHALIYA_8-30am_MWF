<?php

if(isset($_POST["sub"]))
{
    $a=$_POST["a"];
    $b=$_POST["b"];

    $a=$a+$b;
    $b=$a-$b;
    $a=$a-$b;

    echo "<h2 style='color:red' align='center'>After swap a value = ".$a." and b value = ".$b." </h2>";
}

?>

<html>
    <body>
        <center>
            <form method="post">
                Enter a value : <input type="text" name="a" placeholder="Enter a value *">
                <br><br>
                Enter b value : <input type="text" name="b" placeholder="Enter b value *">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>