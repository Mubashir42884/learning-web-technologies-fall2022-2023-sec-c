<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistant Dashboard</title>
</head>
<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">

            <th style='border:white;' align="center" colspan="2">
                <a href="Member Dashboard.php"><img src="Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="viewassistantprofile.php" style="color: #99d9ea ;">
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
                            <h3 style="font-size: 22;"><b>ASSISTANT DASHBOARD</b></h3>
                            <ul>
                                <li><a href="viewassistantprofile.php" style="color: #4e0755;">Assistant Profile</a></li>
                        
                                <li><a href="editassistant.php" style="color: #4e0755;">Edit Profile</a></li>
                    
                                <li><a href="Business Expense.html" style="color: #4e0755;">Corporate Account</a></li>
                                
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"><p style="font-size:30px; color: #4e0755;" align="center"> WELCOME, <?php echo("'$username'"); ?> TO</p><h1 style="font-size:50px; color: #4e0755;" align="center">HeptoPass</h1></td>
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