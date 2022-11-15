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

            // $("#btn").click(function()
            // {
            //     alert('i clicked on btn')
            // });

            // $("#btn").dblclick(function()
            // {
            //     alert('i clicked on btn')
            // });

            $("#btn").hover(function()
            {
                alert('i clicked on btn')
            });
            
        });

    </script>
</head>
<body>
    <center>
        <button type="button" id="btn">Click Me</button>
    </center>
</body>
</html>
