<?php

if(isset($_POST["sub"]))
{
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    $oprnd = $_POST["sub"];

    if($oprnd == "+")
    {
        $ans = $num1 + $num2;
    }
    else if($oprnd == "-")
    {
        $ans =  $num1 - $num2;
    }
    else if($oprnd == "*")
    {
        $ans = $num1 * $num2;
    }
    else if($oprnd == "/")
    {
        $ans = $num1 / $num2;
    }
}

?>

<html>
    <body>
        <center>
            <form method="post">
                <h1>Simple Calculator</h1><br>

                First Number : <input name="n1" value=" "><br><br>

                Second Number : <input name="n2" value=" "><br><br>

                <input type="submit" name="sub" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="sub" value="*">
                <input type="submit" name="sub" value="/"><br><br>

                Result : <input type="text" value="<?php echo $ans; ?>"><br>
            </form>
        </center>
    </body>
</html>