<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="content-type" content="text/html">
    <title></title>
</head>
<body>
    <table width="500px" height="500px" cellpadding="0px" cellspacing="0px" border="2px">

    <?php

    for($i=1;$i<=8;$i++)
    {
        echo "<tr>";
        for($j=1;$j<=8;$j++)
        {
            $total = $i + $j;
            if($total % 2 == 0)
            {
                echo "<td height=50px  width=50px bgcolor=white></td>";
            }
            else
            {
                echo "<td height=50px  width=50px bgcolor=black></td>";
            }
        }
        echo "</tr>";
    }

    ?>

    </table>
</body>
</html>