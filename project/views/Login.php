<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">

            <th style='border:white;' align="center" colspan="2">
                <a href="Home.php"><img src="Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="Home.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="Signup.php" style="color: #99d9ea ;">&nbsp;Registration</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        </tr>

        <tr style="font-size: 26px;">
            <td colspan="3" width="1920" align="center">
                <form method="post" action="loginCheck.php">
                    <fieldset style="width:700px; border-radius: 30px;" >
                        <legend  style="color: #4e0755; border-radius: 5px;"><b>LOGIN</b></legend>

                        <table border="0" width="500">
                            <tr style="font-size: 18px;">
                                <td><label id="uname">Username</label></td>
                                <td>:<input type="text" name="username" id="uname" style="font-family:'Quicksand'; font-size: 18px;" /></td>
                            </tr>
                            <tr style="font-size: 18px;">
                                <td><label id="pass">Password</label></td>
                                <td>:<input type="password" name="password" id="pass" style="font-family:'Quicksand'; font-size: 18px;"/>
                                <a href="Forgot Password.html">Forgot Password?</a>
                            </td>
                            </tr>
                            <tr style="font-size: 18PX;">
                                <td colspan="2" align="left"><input type="checkbox" name="remember" style="font-family:'Quicksand'; font-size: 18px;"/> Remember Me</td>

                            </tr>
                            <tr style="font-size: 18px;">
                                <td  colspan="2" align="center"><input type="submit" name="Login" value="Login" style="font-family:'Quicksand'; font-size: 18px;" /></td>
                            </tr>
                            <tr style="font-size: 14px;">
                                <td align="center" colspan="2">
                                    Don't have an account? <a href="Signup.php">Signup Here</a>
                                    <br><a href="adminLogin.php">Administration Login</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright ⓒ 2022</h4>
            </td>
        </tr>
    </table>
</body>
</html>