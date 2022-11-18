<?php

class table
{
    public function multi_table()
    {
        if(isset($_POST["sub"]))
        {
            $no = $_POST["num"];

            for($i=1;$i<=10;$i++)
            {
                $ans = $no * $i;
                echo "<h2 align='center'>".$no."*".$i."=".$ans."</h2>";
            }
            
        }
    }
}
$obj = new table;
$obj -> multi_table();

?>

<html>
    <body>
        <center>
            <form method="post">
                <label>Enter any number</label>
                <input type="text" name="num" placeholder="Enter any number">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>