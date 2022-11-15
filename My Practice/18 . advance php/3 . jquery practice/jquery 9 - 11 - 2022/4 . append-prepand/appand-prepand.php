<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/jquery.min.js'></script>
    <script>
        jQuery(document).ready(function()
        {
            // jQuery("#btn").click(function()
            // {
            //     jQuery("b").append("<b>&nbsp;Chikhaliya</b>");
            // })

            jQuery("#btn1").click(function()
            {
                jQuery("b").prepend("<b>&nbsp; Chikhaliya</b>");
            })
        });
    </script>
</head>
<body>

    <center>
        <b>Brijesh</b>
        <br><br>
        <!-- <button type="button" id="btn">Click to add surname >></button> -->

        <button type="button" id="btn1">Click to add surname >></button>

    </center>
    
</body>
</html>