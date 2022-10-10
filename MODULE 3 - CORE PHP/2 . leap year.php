<html>
    <body>
         <form method="post">
            <h3>Check the leap year</h3>
            Enter a year : <input type="text" name="year" placeholder="Enter a year *">
            <br><br>

            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>

<?php

if(isset($_POST["sub"]))
{
    $year = $_POST["year"];

    if($year % 4 == 0)
    {
        if($year % 100 == 0)
        {
            if($year % 400 == 0)
            {
                echo "$year is a leap year";
            }
            else
            {
                echo "$year is not a leap year";
            }
        }
        else 
        {
            echo "$year is a leap year";
        }
    }
    else 
    {
        echo "$year is not a leap year";   
    }
}

?>
