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
                $("#para").hide();
            });

            $("#btn1").click(function()
            {
                $("#para").show();
            });

            // $("#btn2").click(function()
            // {
            //     $("#para").toggle("slow");
            // });

            $("#btn2").click(function()
            {
                $("#para").toggle(3000);
            });
        });


    </script>
</head>
<body>
    <center>
        <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolorum voluptate culpa architecto praesentium eligendi voluptas fugiat eum aut saepe, illo, odio consequatur perferendis incidunt magnam vitae suscipit asperiores adipisci.</p>
        <button type="button" id="btn">click to hide</button>
        <button type="button" id="btn1">click to show</button>
        <button type="button" id="btn2">click to toggle</button>
    </center>
</body>
</html>