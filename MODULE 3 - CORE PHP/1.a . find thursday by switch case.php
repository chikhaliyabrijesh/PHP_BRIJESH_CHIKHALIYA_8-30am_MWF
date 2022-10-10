<html>
    <body>
        <center>
            <form method="post">
                <h2 align="center">Find a Day by switch case</h2> 
                Enter Your Choice : <input type="text" name="cnm" placeholder="Enter Your Choice *">
                <br><br>

                <input type="submit" name="sub" value="submit">
            </form>
        </center>
    </body>
</html>

<?php

if(isset($_POST["sub"]))
{
    $ch=$_POST["cnm"];

    switch($ch)
    {
        case 1 : 
            echo "<h3 align='center'>Today is Sunday</h3>";
            break;

        case 2 : 
            echo "<h3 align='center'>Today is Monday</h3>";
            break;

        case 3 : 
            echo "<h3 align='center'>Today is Tuesday</h3>";
            break;

        case 4 : 
            echo "<h3 align='center'>Today is Wednesday</h3>";
            break;

        case 5 : 
            echo "<h3 align='center'>Today is Thursday</h3>";
            break;

        case 6 : 
            echo "<h3 align='center'>Today is Friday</h3>";
            break;

        case 7 : 
            echo "<h3 align='center'>Today is Saturday</h3>";
            break;

        default :
            echo "<h3 align='center'>Incorrect Number Of Weekday</h3>";
            break;
    }
}

?>

