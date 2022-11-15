<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th>Select Photo</th>
                <td><input type="file" name="img"></td>
            </tr>

            <tr>
                <th>Email</th>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <th>Password</th>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <th>Address</th>
                <td><textarea name="add"></textarea></td>
            </tr>

            <!-- call web services to fetch all country list -->

            <tr>
                <th>Select Country</th>
                <td><select name="country">
                    <option value="">-select country-</option>

                    <?php

                    $url = "http://country.io/names.json";
                    $countrylist = file_get_contents($url,true);
                    $data = json_decode($countrylist,true);
                    foreach($data as $country)
                    {
                    ?>
                    <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                    <?php    
                    }
                    ?>
                </select></td>
            </tr>

            <!-- call webservices to fetch state list -->

            <tr>
                <th>Select State</th>
                <td><select name="state">
                    <option value="">-select state-</option>

                    <?php

                    $url1 = "http://localhost/advance%20php%20practice/4%20.%20webservices%20practice/4%20.%20examples/statelist.json";
                    $statelist = file_get_contents($url1,true);
                    $data1 = json_decode($statelist,true);
                    foreach($data1 as $state)
                    {
                    ?>
                    <option value="<?php echo $state ?>"><?php echo $state; ?></option>
                    <?php
                    }
                    ?>
                </select></td>
            </tr>

            <tr>
                <td><input type="submit" name="sub" value="register"></td>
            </tr>
        </table>
    </form>
</body>
</html>