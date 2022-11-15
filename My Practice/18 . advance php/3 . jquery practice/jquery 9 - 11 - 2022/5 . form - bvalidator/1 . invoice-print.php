<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/gray.css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.bvalidator.js"></script>
    <script src="js/default.min.js"></script>
    <script src="js/gray.js"></script>

    <script>
        jQuery(document).ready(function()
        {
            jQuery("#clk").click(function()
            {
                jQuery("#crt").remove();
            })

            $("#btn").click(function()
            {
                $("#addcustomer").fadeToggle("slow");
            });
        });
    </script>

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
            width: 30%;
            height: auto;
            margin-top: -30%;
            margin-left: 25%;
            background-color: black;
            color: white;
            padding: 5%;
            position: absolute;
        }
    </style>
</head>
<body>

    <br><br>
    <button type="button" style="background-color: red; color: white; padding: 0px; width: 20%; border: none; margin-left: 5%;" id="btn"><h3>Add Customer</h3></button>

    <table id="crt" align="center" cellpadding="4" cellspecing="4">
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
            <td><a href="#" id="clk" onclick="return confirm('Are You Sure To Remove Cart ?')">Delete</a></td>
        </tr>

        <tr>
            <td colspan="6" align="right"><h3 style="background-color: black; color: white; padding: 5px; width: 40%;">Subtotal of product is : Rs. <label id="tot">90550</label>/-</h3></td>

        </tr>

        <tr>
            <td colspan="6" align="center"><button type="button" style="background-color:red; color: white; padding: 5px; width: 20%; border: none" onclick="printme()" id="btn"><h3>Print Invoice</h3></button></td>
        </tr>

    </table>

    <!-- APPLY FORM BVALIDATOR -->

    <center>
        <div id="addcustomer" align='center'>
            <form method="post" id="frm" action="2 . welcome.php">

                <input type="text" name="email" placeholder="email" data-bvalidator="required,email">
                <br><br>

                <input type="password" name="password" placeholder="password" data-bvalidator="required,minlen[4],maxlen[12]">
                <br><br>

                <input type="text" name="mob" placeholder="mobile" data-bvalidator="required,minlen[10],maxlen[10],digit">
                <br><br>

                <input type="text" name="firstname" placeholder="firstname" data-bvalidator="required,alpha">
                <br><br>

                <input type="text" name="lastname" placeholder="lastname" data-bvalidator="required,alpha">
                <br><br>

                <input type="date" name="dob" placeholder="dob" data-bvalidator="required">
                <br><br>

                <textarea name="address" placeholder="address" data-bvalidator="required"></textarea>
                <br><br>

                <input type="submit" name="log" id="btn" value="Add Customer" style="background-color: red; color: white; padding: 5px; width: 25%; border: none;">
                <br><br>

            </form>
        </div>
    </center>

    <script type="text/javascript">

        function printme()
        {
            document.getElementById("btn").style='display:none';
            window.print();
        }
        
    </script>
    
</body>
</html>