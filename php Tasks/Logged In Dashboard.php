<?php 
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: Login.php');
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <table border="2">
        <tr>
            <th align="left" width="640" style='border:none;'>
                <img src="xcompany.png" height="100">
            </th>
            <th width="640" style='border:none;'>

            </th>
            <th align="right" height="100" width="640" style='border:none;'>
                Logged in as
                <a href="Home.html">
                    <?php 
                        $username = $_SESSION['user']['username'];
                        echo($username);
                    ?>
                | </a>
                <a href="Logout.php">Log Out</a>
            </th>
        </tr>

        <tr>
            <td valign="top" colspan="3" height="150" width="1920" align="left">
                <table border="0">
                    <tr>
                        <th>Account</th>
                    </tr>
                    <tr style="border:solid" ;>
                        <td>
                            <ul>
                                <li><a href="Logged In Dashboard.php">Dashboard</a></li>
                                <li><a href="ViewProfile.php">View Profile</a></li>
                                <li><a href="">Edit Profile</a></li>
                                <li><a href="">Change Profile Picture</a></li>
                                <li><a href="">Change Password</a></li>
                                <li><a href="">Log Out</a></li>
                            </ul>
                        </td>
                        <td valign="middle" width="500">
                            <h1 align="center">Welcome, <?php echo($username); ?></h1>
                        </td>
                    </tr>
                </table>
            </td>
            
        </tr>

        <tr>
            <td colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright  2017</h4>
            </td>
        </tr>
    </table>
</body>
</html>