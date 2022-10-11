<?php

if(isset($_POST["sub"]))
{
    $no=$_POST["num"];

    $i=1;
    while($i<=10)
    {
        $ans = $no * $i;
        echo "$no * $i = $ans"."<br>";
        $i++;
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