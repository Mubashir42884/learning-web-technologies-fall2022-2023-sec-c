<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){

        header('location: Login.php?err=null&&msg=none');
    }else if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){

        setcookie('status', 'true', time()+3600, '/');
        header('location: Member Dashboard.php');
    }else{
        echo "invalid user";
    }


?>