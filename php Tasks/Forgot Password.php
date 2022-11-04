<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <table border="2">
        <tr>
            <th align="left" width="640" style='border:none;'><img src="xcompany.png" height="100"></th>
            <th width="640" style='border:none;'></th>
            <th align="right" height="100" width="640" style='border:none;'>
                <a href="Home.html">Home | </a>
                <a href="Login.html">Login | </a>
                <a href="Signup.html">Registration</a>
            </th>
        </tr>

        <tr>
            <td valign="middle" colspan="3" height="300" width="1920" align="left">
                <form method="post" action="loginCheck.php">
                    <fieldset>
                        <legend>FORGOT PASSWORD</legend>

                        <table border="0">
                            <tr>
                                <td><label id="recoverymail">Recovery Email</label></td>
                                <td>:<input type="email" name="recmail" id="recmail" /></td>
                            </tr>
                           
                            <tr>
                                <td><input type="submit" name="mailsubmit" value="Submit" /></td>
                            </tr>
                        </table>

                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright 2017</h4>
            </td>
        </tr>
    </table>
</body>
</html>