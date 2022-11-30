<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/gray.css'>
    <script src='js/jqery.js'></script>
    <script src='js/jquery.bvalidator.js'></script>
    <script src='js/default.min.js'></script>
    <script src='js/gray.js'></script>

    <script>
        $(document).ready(function()
        {
            $("#frm").bValidator();
        });
    </script>
</head>
<body>
<center>
    <h1>Validation By JQuery</h1>
    <br>
    <form method="post" id="frm">
        <input type="text" name="firstname" placeholder="firstname" style="width:35%;" data-bvalidator="required,alpha">
        <br><br>

        <input type="text" name="lastname" placeholder="lastname" style="width:35%;" data-bvalidator="required,alpha">
        <br><br>

        <input type="text" name="email" placeholder="Email" style="width:35%;" data-bvalidator="required,email">
        <br><br>

        <input type="password" name="password" placeholder="password"style="width:35%;" data-bvalidator="required,minlen[4],maxlen[12]">
        <br><br>

        <input type="text" name="mob" placeholder="Mobile" style="width:35%;" data-bvalidator="required,minlen[10],maxlen[10],digit">
        <br><br>

        <input type="date" name="dob" placeholder="DOB" style="width:35%;" data-bvalidator="required">
        <br><br>

        <textarea name="address" placeholder="Address" style="width:35%;" data-bvalidator="required"></textarea>
        <br><br>

        <input type="submit" name="sign up" id="btn" value="Sign Up!" style="background-color: green; color: white; padding: 5px; width: 15%; border: none; border-radius: 15px;">
    </form>
</center>
</body>
</html>