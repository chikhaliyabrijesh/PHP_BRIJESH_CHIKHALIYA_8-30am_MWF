<?php

if(isset($_POST["sub"]))
{
    $no=$_POST["num"];

    for($i=1;$i<=10;$i++)
    {
        $ans = $no * $i;
        echo "$no * $i = $ans"."<br>";
    }
}

?>

<html>
    <body>
        <form method="post">
            Enter Any Number : <input type="text" name="num" placeholder="Enter any number *">
            <br><br>

            <input type="submit" name="sub" value="submit">
        </form>        
    </body>
</html>