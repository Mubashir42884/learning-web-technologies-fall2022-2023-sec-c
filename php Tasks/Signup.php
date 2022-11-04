<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <table border="2">
        <tr>
            <th align="left" width="640" style='border:none;'><img src="xcompany.png" height="100"></th>
            <th width="640" style='border:none;'></th>
            <th align="right" height="100" width="640" style='border:none;'>
                <a href="Home.html">Home | </a>
                <a href="Login.php">Login | </a>
                <a href="Signup.php">Registration</a>
            </th>
        </tr>

        <tr>
            <td colspan="3">
                <form method="post" action="Reg_Check.php">
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:<input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" name="email" value=""></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:<input type="text" name="username" value=""></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:<input type="password" name="password" value=""></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:<input type="conpassword" name="conpassword" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" id="male" name="gender" value="Male" />
                                        <label for="male">Male</label>
                                        <input type="radio" id="female" name="gender" value="Female" />
                                        <label for="female">Female</label>
                                        <input type="radio" id="others" name="gender" value="Others" />
                                        <label for="others">Others</label>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" name="dob" />
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit">
                                <input type="reset" name="reset" value="Reset">
                                </td>
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