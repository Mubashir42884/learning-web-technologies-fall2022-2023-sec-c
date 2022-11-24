<?php
    session_start();
    require_once "../models/administrationModel.php";

    $uid = $_POST['uid'];
    $password = $_POST['password'];
    
    $user = searchManagerById($uid, $password);
    //$assistant = searchAssistantById($uid, $password);

    if($uid == "" || $password == ""){

        header('location: ../views/administrationLogin.php?err=empty_id_&_pass');

    }else if($user == 'Manager'){
        $_SESSION['valid'] = 'true';
        $_SESSION['uid'] = $uid;
        header('location: ../views/ManagerDashboard.php');

    }else if($user == 'Assistant'){
        $_SESSION['valid'] = 'true';
        $_SESSION['uid'] = $uid;
        header('location: ../views/assistantDashboard.php');

    }else{
        echo "invalid user";
    }


?>