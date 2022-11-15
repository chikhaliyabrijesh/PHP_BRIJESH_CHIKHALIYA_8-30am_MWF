<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <script src='js/jquery.min.js'></script>
    <script src='js/total.js'></script>

    <style>
        table
        {
            width:90%;
        }
        th
        {
            color : white;
            background-color: black;
        }

        #addcustomer
        {
            display: none;
            width: 50%;
            height: auto;
            margin-top: -30%;
            margin-left: 25%;
            background-color: black;
            color: white;
            padding: 25%;
            position: absolute;
        }
    </style>
</head>
<body>

    <br><br>

    <button type="button" style="background-color: red; color: white; padding: 0px; width: 40%; border: none; margin-left: 5%;" id="btn"><h3>Welcome To Our Website</h3></button>

    <br><br>

    <table id="crt" align="center" cellpadding="4" cellspecing="4">
        <tr>
            <th>Welcome To Our Website</th>
        </tr>
    </table>

    <script type="text/javascript">

        function printme()
        {
            document.getElementById("btn").style='display:none';
            window.print();
        }
        
    </script>

     
</body>
</html>