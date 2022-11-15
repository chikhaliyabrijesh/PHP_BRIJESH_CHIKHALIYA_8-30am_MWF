<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/jquery.min.js'></script>
    <script type="text/javascript">

        $(document).ready(function()
        {

            $("#btn").click(function()
            {
                $("#login").fadeToggle("slow");
            });

        });

    </script>

    <style>
        #login
        {
            display: none;
            width: 30%;
            height: auto;
            margin-top: 2%;
            background-color: black;
            color: white;
            padding: 25px;
        }
    </style>
</head>
<body>
    <center>
        <button type="button" id="btn">Login Here</button>
        
        <div id="login" align="center">
            <form method="post">
                <input type="text" name="Email" placeholder="email">
                <br><br>
                <input type="password" name="password" placeholder="password">
                <br><br>
                <input type="submit" name="log" value="login">
            </form>
        </div>
    </center>
</body>
</html>