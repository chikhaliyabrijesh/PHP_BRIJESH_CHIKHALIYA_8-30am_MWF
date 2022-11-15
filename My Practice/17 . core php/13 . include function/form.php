<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

        include("1 . include.php");
        include_once("2 . include_once.php");
        require("3 . require.php");
        require_once("4 . require_once.php");

    ?>
    <center>
        <form method="post">
            Enter your name : <input type="text" name="unm" placeholder="enter your name *">
            <br><br>

            <input type="submit" name="sub" value="submit">
        </form>
    </center>
</body>
</html>