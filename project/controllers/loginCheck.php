<?php
    session_start();
    require_once "../models/administrationModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" && $password == ""){

        header('location: ../views/Login.php?err=null&&msg=none');

    }else if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){

        setcookie('status', 'true', time()+3600, '/');
        header('location: ../views/members/Member Dashboard.php');
        
    }else{
        echo "invalid user";
    }


?>