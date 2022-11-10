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
    <form action="checkPic.php" method="POST" enctype="multipart/form-data">
		<fieldset>
            <legend><b>PROFILE PICTURE</b></legend>    

                    <img src="dp.png" height="80" width="80"></br>
                    <input type="file" name="dp">
                    </br>_____________________________________
                </br>
            <input type="submit" name="dpsubmit" value="Submit">
        </fieldset>
        <a href="Home.php">Back Home</a>
    </form>
</body>
</html>