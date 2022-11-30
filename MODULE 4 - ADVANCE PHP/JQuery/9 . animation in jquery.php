<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src='js/jquery.js'></script>
    <style>
        h1
        {
            font-size: 25px;
        }
        #box
        {
            background-color: purple;
            color: white;
            width: 100px;
            height: 100px;
            padding: 10px;
            border: 1px solid black;
            position: relative;
        }
    </style>

    <script>
        $(document).ready(function()
        {
            $('#animateBtn').click(function()
            {
                $('#box').animate({left : '200px',fontSize:'30px',width:'250px'},5000);
                $('#box').animate({top : '100px'},5000);
                $('#box').animate({height : '250px'},5000);
                $('#box').animate({opacity : '0.5'},3000);
            });
        });
    </script>
</head>
<body>
    <h1>Animation By JQuery</h1>

    <button id="animateBtn">Animate</button>
    <br><br>

    <div id="box">JQuery Animation</div>

</body>
</html>