﻿<?php 
    session_start();

    if(isset($name) || isset($username) || isset($email) || isset($dob) || isset($gender)){
        header('location: Registration.php');
    }
?>


<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <form action="checkPass.php" method="POST">
		<fieldset>
            <legend><b>CHANGE PASSWORD</b></legend>
            <table>
                <tr>
                    <td>
                    <label for="currpass">Current Password :</label>
                    </td>
                    <td>
                    <input type="password" id="currpass" name="currpass"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="newpass">New Password :</label>
                    </td>
                    <td>
                    <input type="password" id="newpass" name="newpass"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="retypepass">Current Password :</label>
                    </td>
                    <td>
                    <input type="password" id="retypepass
                    " name="retypepass"><br>
                    </td>
                </tr>
            </table>
            ___________________________________

        </br>
        <input type="submit" name="submitpass" value="Submit">
        </fieldset>
        <a href="Home.php">Back Home</a>
        
    </form>
</body>
</html>