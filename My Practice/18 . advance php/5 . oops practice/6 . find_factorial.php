<?php

class fact
{
    public function factorial()
    {
        if(isset($_POST["sub"]))
        {
            $no = $_POST["num"];
            
            $f = 1;
            for($i=1;$i<=$no;$i++)
            {
                $f = $f * $i;
            }
            echo "<h2 align='center'>The Factorial Of Given Number Is : ".$f."</h2>";
        }
    }
}
$obj = new fact;
$obj -> factorial();

?>

<html>
    <body>
        <center>
            <form method="post">
                <label>Enter Any Number</label>
                <input type="text" name="num" placeholder="Enter Any Number">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>