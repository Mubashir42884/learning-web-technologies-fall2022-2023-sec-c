<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
        <form method="POST" action="../controllers/regCheck.php">
            <fieldset>
                <legend>REGISTRATION</legend>
                <table>
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="id" value="" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password" id="pass" value="" required onkeyup="passCheck()"/>
                            <span style="color: red;">*</span>
                        </td1>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>
                            <input type="password" name="cpwd" id="cpass" value="" required onkeyup="cpwdCheck()">
                            <span style="color: red;">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="" required></td>
                    </tr>
                    <tr>
                        <td>User Type <i>[User/Admin]</i></td>
                        <td>
                            <select name="utype" id="utype" required>
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="register" value="Register"><a href="login.php"> Login</a></td>
                        <td></td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <script>
            
            function passCheck()
            {
                let pass = document.getElementById('pass').value;
                let cpass = document.getElementById('cpass').value;

                const passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

                        if (!pass.match(passPattern))
                        {
                            let error1 = "Password should be at least 6 letters with special characters!";
                            document.getElementsByTagName('span')[0].innerHTML = error1;
                        }
                        if (pass.match(passPattern))
                        {
                            let error0 = "Ok";
                            document.getElementsByTagName('span')[0].innerHTML = error0;
                        }
            }
            function cpwdCheck(){
                let pass = document.getElementById('pass').value;
                let cpass = document.getElementById('cpass').value;

                if(!pass.match(cpass))
                        {
                            let error2 = "Password doesn't match";
                            document.getElementByTagName('span')[0].innerHTML  = error2;
                        } 
                if(pass.match(cpass))
                        {
                            let error3 = "Ok";
                            document.getElementByTagName('span')[0].innerHTML  = error3;
                        }
            }
        </script>
</body>
</html>