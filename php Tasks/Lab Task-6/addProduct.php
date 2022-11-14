<?php

 // $connection	= mysqli_connect('server name', 'username', 'password', 'db name');
	$connection	= mysqli_connect('localhost', 'root', '', 'lab6');
    if(isset($_GET['err'])){
        echo "null product data";
    }

        // $sql= "SELECT * FROM products;";
        // $result = mysqli_query($connection, $sql);
        // $resultCheck = mysqli_num_rows($result);
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>

    <form method="POST" action="addCheck.php">
        <fieldset>
            <legend>Add Product</legend>
        <table>
            <tr>
                <td>
                    <label id="pname" for="pname">Name</label><br>
                    <input name="pname" type="text" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label id="buyprice" for="buyPrice">Buying Price</label><br>
                    <input name="buyPrice" type="text" value="">
                </td>
            </tr>

            <tr>
                <td>
                    <label id="sellprice" for="sellPrice">Selling Price</label><br>
                    <input name="sellPrice" type="text" value="">
                </td>
            </tr>

            <tr>
                <td>
                ____________________________________________<br>
                    <input name="stat" type="checkbox" value="Yes"> <label id="stat" name="stat" for="stat"> Display Product</label> <br>
                ____________________________________________<br>
                <input type="submit" name="submit" value="SAVE"></button>
                </td>
            </tr>
        </table>
        </fieldset>

    </form>
    
</body>
</html>