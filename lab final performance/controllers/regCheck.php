<?php
    session_start();
    require_once('../models/userModel.php');

    $id = $_POST['id'];
    $password = $_POST['password'];
    $cpwd = $_POST['cpwd'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $utype = $_POST['utype'];

    if($id == "" || $password == "" || $email == "" || $utype == ""){
        header('location: ../views/signup.php?registration=unsuccessful');

    }else { 
        $user = ['id'=>$id, 'password'=> $password,'name'=> $name, 'email'=> $email, 'utype'=> $utype];
        $status = insertUser($user);
        if($status){
            header('location: ../views/login.php');
        }else{
            echo "DB insert error!";
        }
        
    }


?>