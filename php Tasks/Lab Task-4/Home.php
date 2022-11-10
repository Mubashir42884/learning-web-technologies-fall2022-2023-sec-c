<?php
    session_start();

    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }

    if(isset($name) || isset($username) || isset($email) || isset($dob) || isset($gender)) {
        header('location: Signup.php');
    }
?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <?php 
     $username = $_SESSION['user']['username'];
    ?>
    <h1 align="center">WELCOME <?php echo $username; ?></h1>
    <a href="ChangeDp.php">Change Profile Picture</a><br>
    <a href="ChangePass.php">Change Password</a><br>

    <?php 
       $dp_src = "upload/".$_SESSION['user']['dp'];
       echo "<img src=".$dp_src." height=200 weight=200>";
    ?> 
    <br><br>
    <a href="logout.php">Log Out</a>
</body>
</html>