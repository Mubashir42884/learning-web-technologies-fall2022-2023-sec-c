<?php
    session_start();
    $currpassword = $_POST['currpass'];
    $newpassword = $_POST['newpass'];
    $retypepassword = $_POST['retypepass'];

    $ogpass = $_SESSION['user']['password'];

    $pnumber    = preg_match('@[0-9]@', $newpassword);
    $pspecialChars = preg_match('@[^\w]@', $newpassword);
    $len_pwd = strlen($newpassword);

    if($currpassword !== $ogpass){
        echo "<script>alert('Current Password does not match!');</script>";
    }

    elseif ($newpassword !== $retypepassword) {
        echo "<script>alert('Retyped Password does not match!');</script>";
    }

    elseif (!$pnumber || !$pspecialChars || $len_pwd < 8) {
        echo "<script>alert('New password must contain at least 4 characters with number and special character!');</script>";
    }else {
        $_SESSION['user']['password'] = $newpassword;
        header('location: Login.php');
    }
?>