<?php 
    session_start();

    if(isset($name) || isset($username) || isset($email) || isset($dob) || isset($phoneno) || isset($profilepic) || isset($gender)){
        header('location: signup.php');
    }

?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
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

        <tr style="font-size: 26px;">
            <td align="center">
                <form method="post" action="editCheck.php" enctype="multipart/form-data">

                    <fieldset style=" border-radius: 30px; width: 750px;">
                        <legend style="color: #4e0755; border-radius: 5px;"><b>UPLOAD PROFILE PICTURE</b></legend>
                        <table border="0">
                            <tr style="font-size: 20px;">
                                <td style="color: #4e0755;">Profile Picture</td>
                                <td> : </td>
                                <td>
                                        <img src="upload_dp.png" height=120>
                                        <br><input type="file" name="dp" style="font-family:'Quicksand'; font-size: 18px;">
                                        <input type="submit" name="dpsave" value="Upload" style="font-family:'Quicksand'; font-size: 22px; font-weight:500;">

                                </td>
                            </tr>
                            <tr style="font-size: 26px;">
                                <td colspan="3" align="center">
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