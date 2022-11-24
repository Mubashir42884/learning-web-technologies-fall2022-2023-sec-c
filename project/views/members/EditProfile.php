<?php 
    session_start();

    if(isset($name) || isset($username) || isset($email) || isset($dob) || isset($phoneno) || isset($profilepic) || isset($gender)){
        header('location: ../../views/Signup.php');
    }
     
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
                    <a href="Member Dashboard.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="../../controllers/Logout.php" style="color: #99d9ea ;">&nbsp;Log Out</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr style="font-size: 26px;">
            <td align="center">
                <form method="post" action="../../controllers/regCheck.php">
                
                    <fieldset style=" border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>EDIT PROFILE</b></legend>
                    <table border="0">
                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Name</td>
                            <td> :
                            <input type="text" size="28" name="editname" id="editname" value="<?php $name = $_SESSION['user']['name']; echo($name); ?>" placeholder="<?php $name = $_SESSION['user']['name']; echo($name); ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Email</td>
                            <td> : 
                            <input type="text" size="28" name="editname" id="editname" value="<?php $email = $_SESSION['user']['email']; echo($email);?>" placeholder="<?php $email = $_SESSION['user']['email']; echo($email);?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Phone No</td>
                            <td> : 
                            <input type="text" size="28" name="editname" id="editname" value="<?php $phno = $_SESSION['user']['phno']; echo($phno);?>" placeholder="<?php $phno = $_SESSION['user']['phno']; echo($phno);?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                        </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Gender </td>
                            <td> : 
                            <input type="text" readonly size="18" name="editname" id="editname" value="<?php $gender = $_SESSION['user']['gender']; echo($gender);?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <select style="font-family:'Quicksand'; font-size: 18px;"><option value="Male">Male</option><option value="Female">Female</option><option value="Others">Others</option></select>
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Date of Birth</td>
                            <td> :
                            <input type="text" readonly size="9" name="editname" id="editname" value="<?php $dob = $_SESSION['user']['dob']; echo($dob);?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="date" name="editdate" id="editdate" value="" style="font-family:'Quicksand'; font-size: 18px;"/>
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Username</td>
                            <td> : 
                            <input type="text" size="28" name="editname" id="editname" value="<?php $username = $_SESSION['user']['username']; echo($username);?>" placeholder="<?php $username = $_SESSION['user']['username']; echo($username);?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Profile Picture</td>
                            <td> 
                                <form method="post" action="upload.php" enctype="multipart/form-data">
                                    <img src="upload_dp.png" height=120px>
                                    <br><input type="file" name="dp" style="font-family:'Quicksand'; font-size: 18px;">
                                </form>
                            </td>
                        </tr>
                        <tr style="font-size: 26px;">
                            <td colspan="2" align="center">
                               <br><br> <input type="submit" name="save" value="Save" style="font-family:'Quicksand'; font-size: 22px;">
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