<?php

if(isset($_POST["sub"]))
{
    $no = $_POST["num"];
    $sum = 0;
    $n = $no;

    while(floor($no))
    {
        $r = $no % 10;
        $sum = $r + ($sum * 10);
        $no = $no / 10;
    }
    if($n == $sum)
    {
        echo "<h2 align='center'>$n is a palindrome number</h2>";
    }
    else
    {
        echo "<h2 align='center'>$n is not a palindrome number</h2>";
    }

}

?>

<html>
    <body>
        <center>
            <form method="post">
                Enter a number : <input type="text" name="num" placeholder="enter a number *">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>

