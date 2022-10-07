<?php

if(isset($_POST["sub"]))
{
    $ch = $_POST["cnm"];

    switch($ch)
    {
        case 1 :
            
            echo "<h1 align='center'>Find The Area Of Circle : </h1>";

            $r = 15;
            $pi = 3.14;

            $area = 2 * $pi * $r;

            echo "<h2 align='center'>The area of circle is : ".$area."</h2>";

            break;

        case 2 : 

            echo "<h1 align='center'>Find The Area Of Square : </h1>";

            $l = 10;
            
            $area = $l * $l;

            echo "<h2 align='center'>The area of square is : ".$area."</h2>";

            break;

        case 3 : 

            echo "<h1 align='center'>Find The Area Of Triangle : </h1>";

            $b = 10;
            $h = 30;
            
            $area = 0.5 * $b * $h;

            echo "<h2 align='center'>The area of triangle is : ".$area."</h2>";

            break;

        case 4 : 

            echo "<h1 align='center'>Find The Area Of Rectangle : </h1>";

            $l = 55;
            $w = 20;
            
            $area = $l * $w;

            echo "<h2 align='center'>The area of rectangle is : ".$area."</h2>";

            break;

        default : 
        
            echo "<h2 align='center'>Incorrect Choice</h2>";
            break;
    }
}

?>

<html>
    <body>
        <center>
            <form method="post">
                Enter Your Choice : <input type="text" name="cnm" placeholder="Enter Your Choice *">
                <br><br>
                
                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>