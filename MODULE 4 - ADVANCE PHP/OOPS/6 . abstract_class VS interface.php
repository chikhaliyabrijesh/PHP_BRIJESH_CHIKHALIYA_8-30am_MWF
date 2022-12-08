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
    <center>
        <table align="center" width="90%" border="1" cellpadding="10" cellspacing="5">
            <h1 align="center">Difference Between Abstract Class And Interface</h1>
            <tr>
                <th><b>Points</b></th>
                <th><b>Abstract Class</b></th>
                <th><b>Interface</b></th>
            </tr>

            <tr>
                <td>Inheritance</td>
                <td>Abstract class does not support multiple inheritances.</td>
                <td>Interface class supports multiple inheritance feature</td>
            </tr>

            <tr>
                <td>Contain</td>
                <td>Abstract class does contain a data member.</td>
                <td>This does not contain a data member.</td>
            </tr>

            <tr>
                <td>Containers</td>
                <td>The abstract class supports containers.</td>
                <td>The interface does not allow containers.</td>
            </tr>

            <tr>
                <td>Members</td>
                <td>Abstract class contains both incomplete(i.e. abstract) and complete members.</td>
                <td>An interface class only contains incomplete members which refer to the signature of the member.</td>
            </tr>

            <tr>
                <td>Access Modifier</td>
                <td>An abstract class can contain access modifiers within subs, functions, and properties.</td>
                <td>Since everything is assumed to be public, an interface class does not have access modifiers by default.</td>
            </tr>

            <tr>
                <td>Static Members</td>
                <td>Only a complete member of the abstract class can be static.</td>
                <td>Any member of an interface cannot be static.</td>
            </tr>
        </table>
    </center>
</body>
</html>