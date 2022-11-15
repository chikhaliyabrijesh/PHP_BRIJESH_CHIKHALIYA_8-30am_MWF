<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <script>
        function conf()
        {
            if(confirm('Are You Sure To Delete Data ???'))
            {
                alert('Thanks you are Deleted');
                window.location='https://www.amazon.in';
            }
            else
            {
                window.location='7 . confirm.php';
            }
        }
    </script>
</head>
<body>
    
    <button type="button" onclick="conf()">Delete Me</button>

</body>
</html>