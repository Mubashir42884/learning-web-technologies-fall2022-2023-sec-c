<?php

 // $connection	= mysqli_connect('server name', 'username', 'password', 'db name');
	$connection	= mysqli_connect('localhost', 'root', '', 'lab6');

 // checking DB creation
    if($connection){
        echo "DB Creation Successful!";
    }else{
        echo "Error!";
    }
?>

<html>
<head>
    <title>index</title>
</head>
<body>

    <?php
        echo "<br><br>";
        $sql= "SELECT * FROM products;";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {	
            while($row = mysqli_fetch_assoc($result)) {
                echo "<b>Product ID : </b>".$row['pid']."<br>";
                echo "<b>Product Name : </b>".$row['pname']."<br>";
                echo "<b>Buying Price : </b>".$row['buyPrice']."<br>";
                echo "<b>Selling Price : </b>".$row['sellPrice']."<br>";
                echo "<b>Profit  : </b>".$row['profit']."<br>";
                echo "<b>Displayable  : </b>".$row['stat']."<br><br>";
            } 
        }
    ?>

</body>
</html>