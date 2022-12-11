<?php
    session_start();
    require_once "../models/userModel.php";

    $id = $_POST['id'];
    $password = $_POST['password'];

    $user = ['id'=>$id, 'password'=>$password];

    $status = login($user);

    if($id == "" || $password == ""){
        header('location: ../views/login.php?err=null&&msg=abc');
    }else if($status){
        $_SESSION['valid'] = 'true';
        $_SESSION['id'] = $id;
        header('location: ../views/home.php');
    }else{
        echo "invalid user";
    }

?>