<html
      >
<head>
    <title>Registration</title>
</head>
<body>
    <form action="regCheck.php" method="POST">
        <fieldset>
            <legend><b>REGISTRATION</b></legend>
            
            <table>
                <tr>
                    <td width="200">
                        <label align="left" for="name">Name </label>
                    </td>
                    <td>
                        :<input type="text" name="name" />
            
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        <label align="left" for="Email">Email</label>
                    </td>
                    <td>
                        :<input required type="email" name="email" />
            
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        <label align="left" for="username">User Name</label>
                    </td>
                    <td>
                        :<input required type="text" name="username" />
                   
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        <label align="left" for="password">Password </label>
                    </td>
                    <td>
                        :<input required type="password" name="password" />
          
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        <label align="left" for="cpwd">Confirm Password </label>
                    </td>
                    <td>
                        :<input required type="password" name="cpwd" />
             
                    </td>
                </tr>
                <tr>
                    <td width="200" colspan="2">
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
                    <td width="200" colspan="2">
                        <fieldset>
                            <legend>Date of Birth</legend>

                            <input type="date" name="dob" />
                        
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="2">
                        <input type="submit" />
                        <input type="reset" />
                    </td>
                </tr>

            </table>
        </fieldset>
        <a href="Login.php">Login Page</a>
    </form>
</body>
</html>