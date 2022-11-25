<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/jquery.js'></script>
    <script>
        $(document).ready(function()
        {
            $("tr:even").css("background-color","lightgreen");
            $("tr:odd").css("background-color","lightblue");
        });
    </script>
</head>
<body>
    <table align="center" width="80%" border="1" cellpadding="10" cellspacing="5">
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Company</th>
            <th>Department</th>
            <th>Salary</th>
        </tr>
        
        <tr align="center">
            <td>101</td>
            <td>Brijesh</td>
            <td>Chikhaliya</td>
            <td>24 Years</td>
            <td>Tops Technology</td>
            <td>IT</td>
            <td>25000</td>
        </tr>

        <tr align="center">
            <td>102</td>
            <td>Mahesh</td>
            <td>Patel</td>
            <td>26 Years</td>
            <td>Tops Technology</td>
            <td>IT</td>
            <td>30000</td>
        </tr>

        <tr align="center">
            <td>103</td>
            <td>Parth</td>
            <td>Kapuriya</td>
            <td>32 Years</td>
            <td>Tops Technology</td>
            <td>IT</td>
            <td>35000</td>
        </tr>

        <tr align="center">
            <td>104</td>
            <td>Karan</td>
            <td>Akabari</td>
            <td>30 Years</td>
            <td>Tops Technology</td>
            <td>IT</td>
            <td>40000</td>
        </tr>

        <tr align="center">
            <td>105</td>
            <td>Anant</td>
            <td>Patel</td>
            <td>23 Years</td>
            <td>Tops Technology</td>
            <td>IT</td>
            <td>45000</td>
        </tr>

        <tr align="center">
            <td>106</td>
            <td>Rajesh</td>
            <td>Dangariya</td>
            <td>27 Years</td>
            <td>Tops Technology</td>
            <td>IT</td>
            <td>50000</td>
        </tr>
    </table>
</body>
</html>