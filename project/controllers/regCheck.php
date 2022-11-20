<?php
    session_start();
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $conpwd = $_POST['conpwd'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $dp = $_POST['dp'];


    //for validation pupose
    $len_uname = strlen($username);
    $len_pwd = strlen($password);
    $len_phn = strlen($phno);

    // Validate password strength
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    // blank field check
    if($name == "" || $username == "" || $password == "" || $conpwd == ""|| $email == "" || $gender==""){
        echo "<script>alert('Please fill all required fields (* marked)');</script>";
    }
    // confirm password check
    elseif ($password !== $conpwd) {
        echo "<script>alert('Confirm Password does not match!');</script>";
    }
    // username & password match check
    elseif ($password == $username) {
        echo "<script>alert('Username and Password cannot be same!');</script>";
    }
    // phone validation check
    elseif ($len_phn != 11) {
        echo "<script>alert('Phone Number must contain 11 digits!');</script>";
    }
    // username validation check
    elseif ($len_uname <= 5 || $len_uname >= 15) {
        echo "<script>alert('Username should be between 5 to 15 letters!');</script>";
    }
    // password validation check
    elseif (!$number || !$specialChars || $len_pwd < 4) {
        echo "<script>alert('Password must contain at least 4 characters with number and special character!');</script>";
    }else {
        $user = ['username'=> $username, 'name'=> $name, "password"=> $password, "conpwd"=> $conpwd, "phno"=> $phno, "email"=> $email, "gender"=> $gender, "dob"=>$dob, "dp"=>$dp];
        $_SESSION['user'] = $user;
        header('location: Login.php');
    }

?>