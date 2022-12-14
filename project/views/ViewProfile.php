<?php 
    session_start();

    if(isset($name) || isset($username) || isset($email) || isset($dob) || isset($phoneno) || isset($profilepic) || isset($gender) || isset($dp_dest)) {
        header('location: Signup.php');
    }
     
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
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
                    <a href="Logout.php" style="color: #99d9ea ;">&nbsp;Log Out</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr style="font-size: 26px;">
            <td align="center">
                <form method="post" action="">
                
                    <fieldset style="width: 750px; border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>VIEW PROFILE</b></legend>
                    <table border="0">
                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Name</td>
                            <td> :
                                <?php
                                $name = $_SESSION['user']['name'];
                                echo($name);
                                ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Email</td>
                            <td> : 
                                <?php
                                $email = $_SESSION['user']['email'];
                                echo($email);
                                ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Phone No</td>
                            <td> : 
                                <?php
                                $phno=$_SESSION['user']['phno'];
                                echo($phno);
                                ?>
                        </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Gender </td>
                            <td> : 
                                <?php
                                $gender = $_SESSION['user']['gender'];
                                echo($gender);
                                ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Date of Birth</td>
                            <td> :
                                    <?php
                                    $dob = $_SESSION['user']['dob'];
                                    echo($dob);
                                    ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Username</td>
                            <td> : <?php 
                            $username=$_SESSION['user']['username'];
                            echo($username); ?>
                        </tr>

                        <tr style="font-size: 20px;" valign=top>
                            <td style="color: #4e0755;">Profile Picture</td>
                            <td>
                            <?php 
                            $dp_src = "upload/".$_SESSION['user']['dp'];
                            echo "<img src=".$dp_src." height=200 weight=200>";
                            ?>
                            
                            </td>
                        </tr> 
                    </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright ??? 2022</h4>
            </td>
        </tr>
    </table>
</body>
</html>