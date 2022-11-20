<?php 
    session_start();

    if(isset($name) || isset($username) || isset($email) || isset($dob) || isset($phoneno) || isset($profilepic) || isset($salary)){
        header('location: signup.php');
    }
     
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Assistant Profile</title>
</head>
<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">
            <th style='border:white;' align="center" colspan="2">
                <a href="Home.php"><img src="Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="Home.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                   
                </p>
            </th>
        </tr>

        <tr style="font-size: 26px;">
            <td align="left">
                <form method="post" action="regcheck.php" method="edit">
                
                    <fieldset style=" border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>EDIT ASSISTANT PROFILE</b></legend>
                    <table border="0">
                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Salary</td>
                            <td> : 
                            <input type="text" size="28" name="editsalary" id="editsalary" placeholder="<?php $phno = $_SESSION['user']['salary']; echo($salary);?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                        </td>
                        </tr>

                    
                        <tr style="font-size: 26px;">
                            <td colspan="2" align="center">
                                <input type="submit" name="save" value="Save" style="font-family:'Quicksand'; font-size: 22px;">
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