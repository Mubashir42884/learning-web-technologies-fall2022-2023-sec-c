<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="../controllers/loginCheck.php">
            <fieldset>
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        <td>User Id</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="remember" value=""> Remember Me</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Login"> <a href="register.php">Register</a>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>