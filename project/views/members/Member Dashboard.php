<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: ../Login.php');
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">

            <th style='border:white;' align="center" colspan="2">
                <a href="Member Dashboard.php"><img src="../../assets/Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="ViewProfile.php" style="color: #99d9ea ;">
                    <?php 
                        $username = $_SESSION['user']['username'];
                        echo($username);
                    ?>
                    </a>&nbsp;|&nbsp;
                    <a href="Member Dashboard.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="../../controllers/Logout.php" style="color: #99d9ea ;">&nbsp;Log Out</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr>
            <td>
                <table border="0" style="border-color: #4e0755; border-width: 7px;">
                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>PROFILE DASHBOARD</b></h3>
                            <ul>
                                <li><a href="ViewProfile.php" style="color: #4e0755;">View Profile</a></li>
                                <li><a href="EditProfile.php" style="color: #4e0755;">Edit Profile</a></li>
                                <li><a href="UploadDP.php" style="color: #4e0755;">Upload Profile Picture</a></li>
                                <li><a href="Business Expense.html" style="color: #4e0755;">Corporate Account</a></li>
                                <li><a href="ProfileSettings.php" style="color: #4e0755;">Profile Settings</a></li>
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"><p style="font-size:30px; color: #4e0755;" align="center"> WELCOME, <?php echo("'$username'"); ?> TO</p><h1 style="font-size:50px; color: #4e0755;" align="center">HeptoPass</h1></td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>EXPENSE LIST</b></h3>
                            <ul>
                                <li><a href="Create New Expense.html" style="color: #4e0755;">Create New Expense</a></li>
                                <li><a href="Edit Expense.html" style="color: #4e0755;">Edit Expense</a></li>
                                <li><a href="Saved Expense.html" style="color: #4e0755;">Saved Expense</a></li>
                                <li><a href="Business Expense.html" style="color: #4e0755;">Business Expense</a></li>
                                <li><a href="Share Expense.html" style="color: #4e0755;">Share Expense</a></li>
                                <li><a href="Export-Import List.html" style="color: #4e0755;">Import/Export Expense</a></li>
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"></td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>EXPLORE EXPENSE</b></h3>
                            <ul>
                                <li><a href="" style="color: #4e0755;">Search Expense</a></li>
                                <li><a href="" style="color: #4e0755;">Calculte Expense</a></li>
                                <li><a href="" style="color: #4e0755;">Budget Expense</a></li>
                                <li><a href="" style="color: #4e0755;">Import/Export Expense</a></li>
                                <li><a href="" style="color: #4e0755;">Expense Reports</a></li>
                                <li><a href="" style="color: #4e0755;">Expense Memo</a></li>
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"></td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>EXTRA FEATURES</b></h3>
                            <ul>
                                <li><a href="" style="color: #4e0755;">Expense Guide</a></li>
                                <li><a href="" style="color: #4e0755;">Travel Guide</a></li>
                                <li><a href="" style="color: #4e0755;">Currency Calculator</a></li>
                                <li><a href="" style="color: #4e0755;">Fuel Consumption Expense</a></li>
                                <li><a href="" style="color: #4e0755;">Prescription Maker</a></li>
                                <li><a href="" style="color: #4e0755;">Tax Management</a></li>
                                <li><a href="" style="color: #4e0755;">Personal Accountant</a></li>
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"></td>
                    </tr>

                    <tr>
                        <td align="left" bgcolor="#99d9ea" width="230" style='border:none;'>
                            <h3 style="font-size: 22;"><b>OTHERS</b></h3>
                            <ul>
                                <li><a href="" style="color: #4e0755;">Settings</a></li>
                                <li><a href="" style="color: #4e0755;">Privacy & Policy</a></li>
                                <li><a href="" style="color: #4e0755;">Use & Services</a></li>
                                <li><a href="" style="color: #4e0755;">Help & Support</a></li>
                                <li><a href="" style="color: #4e0755;">Give Feedback</a></li>
                                <li><a href="" style="color: #4e0755;">Language</a></li>
                                <li><a href="" style="color: #4e0755;">Give us Feedback</a></li>
                            </ul>
                        </td>
                        <td width="1680" style='border:none;' colspan="3"></td>
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