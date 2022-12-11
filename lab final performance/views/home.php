<?php 
    session_start();

    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }

?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome, <?php echo $_SESSION['id']; ?></h1>
        <a href="#">Change Password</a><br>
        <a href="#">View Users</a><br>
        <a href="../controllers/logout.php">Logout</a>
</body>
</html>