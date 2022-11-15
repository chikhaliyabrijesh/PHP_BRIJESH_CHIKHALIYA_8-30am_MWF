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

        function add()
        {
            var n1 = parseInt(prompt('Enter n1 number here'));
            var n2 = parseInt(prompt('Enter n2 number here'));
            var n3 = n1 + n2;
            alert('Addition of number is : '+n3);
        }

        function sub()
        {
            var n1 = parseInt(prompt('Enter n1 number here'));
            var n2 = parseInt(prompt('Enter n2 number here'));
            var n3 = n1 - n2;
            alert('Substraction of number is : '+n3);
        }

        function mul()
        {
            var n1 = parseInt(prompt('Enter n1 number here'));
            var n2 = parseInt(prompt('Enter n2 number here'));
            var n3 = n1 * n2;
            alert('Multiplication of number is : '+n3);
        }

        function div()
        {
            var n1 = parseInt(prompt('Enter n1 number here'));
            var n2 = parseInt(prompt('Enter n2 number here'));
            var n3 = n1 / n2;
            alert('Division of number is : '+n3);
        }

    </script>
</head>
<body>
    <center>
        <button type="button" onclick="add()">Click to add numbers</button><br><br>
        <button type="button" onclick="sub()">Click to substraction numbers</button><br><br>
        <button type="button" onclick="mul()">Click to multiplication numbers</button><br><br>
        <button type="button" onclick="div()">Click to division numbers</button><br><br>
    </center>
</body>
</html>