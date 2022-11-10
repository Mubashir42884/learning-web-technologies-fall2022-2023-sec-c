<?php
    session_start();
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $cpwd = $_POST['cpwd'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $dp = $_POST['dp'];


    $len_uname = strlen($username);
    $len_pwd = strlen($password);


    $pnumber    = preg_match('@[0-9]@', $password);
    $pspecialChars = preg_match('@[^\w]@', $password);
    $unumber    = preg_match('@[0-9]@', $username);
    $uspecialChars = preg_match('@[^\w]@', $username);


    if($name == "" || $username == "" || $password == "" || $cpwd == ""|| $email == ""){
        echo "<script>alert('Please fill all required fields!');</script>";
    }

    elseif ($password !== $cpwd) {
        echo "<script>alert('Confirm Password does not match!');</script>";
    }

    elseif (!$unumber && !$uspecialChars || $len_uname <= 2) {
        echo "<script>alert('Username is not valid!');</script>";
    }

    elseif (!$pnumber || !$pspecialChars || $len_pwd < 8) {
        echo "<script>alert('Password must contain at least 4 characters with number and special character!');</script>";
    }else {
        $user = ['username'=> $username, 'name'=> $name, "password"=> $password, "cpwd"=> $cpwd, "email"=> $email, "gender"=> $gender, "dob"=>$dob, "dp"=>$dp];
        $_SESSION['user'] = $user;
        header('location: Login.php');
    }

?>