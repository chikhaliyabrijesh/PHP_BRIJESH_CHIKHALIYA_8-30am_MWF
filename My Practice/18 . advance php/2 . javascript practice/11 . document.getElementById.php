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
        function chng()
        {
            document.getElementById("para").style='color:red; font-size:24px; transition:1s ease all';
        }
    </script>
</head>
<body>

    <p id="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat facilis neque ducimus voluptate quam voluptas perferendis. Animi, cupiditate corporis assumenda nostrum molestiae atque quis voluptates distinctio molestias minus doloremque tempora!</p>

    <button type="button" onclick="chng()">Click Me</button>
    <button type="button" ondblclick="chng()">Double Click Me</button>
    <button type="button" onmouseover="chng()">Hover Me</button>
    <button type="button" onmousewheel="chng()">mouse wheel over to me</button>
    <button type="button" onmouseout="chng()">mouse out from me</button>
    
</body>
</html>