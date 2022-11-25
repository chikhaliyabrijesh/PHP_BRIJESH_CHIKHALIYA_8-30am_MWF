<html>
    <body>
        <center>
            <table align="center" width="90%" border="1" cellpadding="10" cellspacing="5">
                <h1 align="center">Difference Between Prop And Attr</h1>
                <tr>
                    <th><b>Points</b></th>
                    <th><b>Prop</b></th>
                    <th><b>Attr</b></th>
                </tr>
    
                <tr>
                    <td>Return Value</td>
                    <td>This method returns the current value.</td>
                    <td>This method returns the default value.</td>
                </tr>

                <tr>
                    <td>Use</td>
                    <td>This method is mainly used when the user wants to change the value for an HTML tag’s attribute.</td>
                    <td>This method is mainly used to set the default value for an HTML tag’s attribute.</td>
                </tr>

                <tr>
                    <td>Changes</td>
                    <td>It changes properties for that HTML tag as per the DOM tree.</td>
                    <td>It changes attributes for that HTML tag.</td>
                </tr>

                <tr>
                    <td>Syntax</td>
                    <td>$(selector).prop(property)</td>
                    <td>$(selector).attr(attribute)</td>
                </tr>

                <tr>
                    <td>Parameters</td>
                    <td>It takes three parameters Property , value and a function.</td>
                    <td>It takes three parameters an attribute, value, and a function.</td>
                </tr>
            </table>
        </center>
    </body>
</html>