<?php

 // $connection	= mysqli_connect('server name', 'username', 'password', 'db name');
	$connection	= mysqli_connect('localhost', 'root', '', 'heptopass');

 // checking DB creation
    if($connection){
        echo "DB Creation Successful!";
    }else{
        echo "Error!";
    }
?>

<html>
<head>
    <title></title>
</head>
<body>

    <?php
        echo "<br><br>";
        $sql= "SELECT * FROM members;";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {	
            while($row = mysqli_fetch_assoc($result)) {
                echo "<b>Name : </b>".$row['name']."<br>";
                echo "<b>Phone No : </b>".$row['phno']."<br>";
                echo "<b>Username : </b>".$row['username']."<br>";
                echo "<b>Date of Birth : </b>".$row['dob']."<br>";
                echo "<b>Gender  : </b>".$row['gender']."<br>";
            } 
        }
    ?>

</body>
</html>