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
        // jquery starter
        $(document).ready(function()
        {

            $("#btn").click(function()
            {

                var a=parseInt(prompt("Enter a number : "));
                var b=parseInt(prompt("Enter b number : "));
                var c=a+b;
                alert('Additions of number is : '+c)

            });

        });
    </script>
</head>
<body>
    <center>
        <button type="button" id="btn">Click to add numbers</button>
    </center>
</body>
</html>
