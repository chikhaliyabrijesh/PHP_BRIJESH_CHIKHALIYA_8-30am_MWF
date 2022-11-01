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

    require_once("odd even.php")

    ?>
    <center>
        <form method="post">
            <h1>Odd OR Even</h1>

            Enter A Number : <input type="text" name="num" placeholder="enter a number *" required>
            <br><br>

            <input type="submit" name="chk" value="submit">
        </form>
    </center>
</body>
</html>