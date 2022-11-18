<?php

class square
{
    public function area()
    {
        if(isset($_POST["sub"]))
        {
            $l = $_POST["sq"];

            $area = $l * $l;

            echo "<h2 align='center'>The area of square is : ".$area."</h2>";
        }
    }
}
$obj = new square;
$obj -> area();

?>

<html>
    <body>
        <center>
            <form method="post">
                <label>Enter a length of square</label>
                <input type="text" name="sq" placeholder="Enter a length">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>