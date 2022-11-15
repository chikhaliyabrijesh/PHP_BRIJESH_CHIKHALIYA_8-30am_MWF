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
        function valid()
        {
            if(document.frm.name.value=="")
            {
                // document.getElementById("error").innerHTML="Please enter your name here";
                alert('please enter name here')
                document.frm.name.focus();
                return false;
            }
        }
    </script>

    <style>
        #error
        {
            color : red;
            margin-left: 8% !important;
        }
    </style>
</head>
<body>
    <center>
        <form method="post" name="frm" action="10 . welcome.php" onsubmit="return valid(this.value)">
            <label>Enter Name :
            <input type="text" name="name" id="name" placeholder="enter your name"><br>
            <span id="error"></span>
            <br><br>
            <input type="submit" name="sub" value="register">
        
    </center>
</body>
</html>