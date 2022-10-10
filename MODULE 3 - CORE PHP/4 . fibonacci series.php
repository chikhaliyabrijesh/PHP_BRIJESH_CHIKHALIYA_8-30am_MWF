<html>
    <body>
         <form method="post">
            <h3>Print The Fibonacci Series</h3>
            Enter a number : <input type="text" name="num" placeholder="Enter a number *">
            <br><br>

            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>

<?php

if(isset($_POST["sub"]))
{
    $n = $_POST["num"];

    $a = 0;
    $b = 1;

    echo "The Fibonacci Series is : $a $b ";
    for($i=1 ; $i <= $n ; $i++)
    {
        $c = $a + $b;
        echo " $c";
        $a = $b;
        $b = $c;
    }
    
}

?>

