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
        $(document).ready(function()
        {
            $(".content").css({"background-color":"orange","padding":"15px"});
            $(".content h1").css({"color":"black","padding":"15px"});
            $(".my-content p").css({"color":"blue","padding":"15px"});
        });
    </script>
</head>
<body>
    <div class="content my-content">
        <h1>About Us</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas velit reiciendis doloribus nam vero. At provident maiores, fugiat cum iste ut saepe sed aliquam quas, facere eveniet vel porro itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ullam quisquam illo placeat, adipisci enim omnis mollitia laboriosam amet, alias itaque nobis debitis suscipit nam voluptate totam. Ab, neque excepturi.</p>
    </div>
</body>
</html>