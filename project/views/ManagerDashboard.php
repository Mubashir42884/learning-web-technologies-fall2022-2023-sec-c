
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
</head>
<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">

            <th style='border:white;' align="center" colspan="2">
                <a href="Member Dashboard.php"><img src="Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="ViewProfile.php" style="color: #99d9ea ;">
                    <?php 
                        $username = $_SESSION['user']['username'];
                        echo($username);
                    ?>
                    </a>&nbsp;|&nbsp;
                    <a href="Home.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="Logout.php" style="color: #99d9ea ;">&nbsp;Log Out</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr>
            <td>
                <table border="0" style="border-color: #4e0755; border-width: 7px;">
                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>MANAGER DASHBOARD</b></h3>
                            <ul>
                                <li><a href="ViewProfile.php" style="color: #4e0755;">View Profile</a></li>
                                <li><a href="EditProfile.php" style="color: #4e0755;">Edit Profile</a></li>
                                <li><a href="Business Expense.html" style="color: #4e0755;">Corporate Account</a></li>
                                <li><a href="ProfileSettings.php" style="color: #4e0755;">Profile Settings</a></li>
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"><p style="font-size:30px; color: #4e0755;" align="center"> WELCOME, <?php echo("'$username'"); ?> TO</p><h1 style="font-size:50px; color: #4e0755;" align="center">HeptoPass</h1></td>
                    </tr>
                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>OTHERS</b></h3>
                            <ul>
                                <li><a href="" style="color: #4e0755;">Settings</a></li>
                                <li><a href="" style="color: #4e0755;">Use & Services</a></li>
                                 <li><a href="" style="color: #4e0755;">Language</a></li>
                              
                            </ul>
                        </td>
                    
                        <td width="1680" style='border:none;' colspan="3"></td>
                    </tr>
                    <tr>
                    <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                        <h3 style="font-size: 22;"><b>SEND MESSAGE</b></h3>
                    <form action="#">
                                        
                        <select name="languages" id="lang">
                        <option value="javascript">JavaScript</option>
                        <option value="php">PHP</option>
                        <option value="java">Java</option>
                   
                        </select>
                        <input type="button" value="Search">
                                                                
                    </form>    
                    </tr>
                </table>
            </td>

        </tr>

        <tr>

            <td width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright ⓒ 2022</h4>
            </td>

        </tr>
    </table>

</body>
</html>