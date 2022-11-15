<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/12 . total.js'></script>
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
    </style>
</head>
<body>

    <table align="center" cellpadding="4" cellspecing="4">
        <tr>
            <th>#</th>
            <th>image</th>
            <th>pname</th>
            <th>select qty</th>
            <th>price</th>
            <th>action</th>
        </tr>

        <tr>
            <td>101</td>
            <td><img src="images/pexels-photo-5083215.webp" width="85px" height="85px"></td>
            <td>Samsung Galaxy</td>
            <td><input type="number" name="qty" id="qty" min="1" max="10" value="1" onchange="subtot()"></td>
            <td>Rs.<input type="text" value="90550" id="price" readonly style="border:none; width:45px">/-</td>
            <td><a href="#">Delete</a></td>
        </tr>

        <tr>
            <td colspan="6" align="right"><h3 style="background-color: black; color: white; padding: 5px; width: 40%;">Subtotal of product is : Rs. <label id="tot">90550</label>/-</h3></td>

        </tr>

        <tr>
            <td colspan="6" align="center"><button type="button" style="background-color:red; color: white; padding: 5px; width: 20%; border: none" onclick="printme()" id="btn"><h3>Print Invoice</h3></button></td>
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