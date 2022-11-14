<?php
    session_start();

    $pname = $_POST['pname'];
    $buyPrice = $_POST['buyPrice'];
    $sellPrice = $_POST['sellPrice'];
    $profit = $sellPrice-$buyPrice;
    if($_POST['stat']==""){
        $_POST['stat'] = "No";
        $status = $_POST['stat'];
    }else{
        $status = $_POST['stat'];
    }
    

    if($pname == "" || $buyPrice == "" || $sellPrice == ""){
        header('location: view.php?err=null');

    }else {
        $con = mysqli_connect('localhost', 'root', '', 'lab6');
        $sql = "INSERT INTO products (pid,pname,buyPrice,sellPrice,profit,stat) VALUES
                ('', '{$pname}', '{$buyPrice}', '{$sellPrice}', '{$profit}', '{$status}');";
        $status = mysqli_query($con, $sql);

            if($status){
                header('view.php?add=success');
            }else{
                echo "DB insert error!";
            }
        
    }


?>