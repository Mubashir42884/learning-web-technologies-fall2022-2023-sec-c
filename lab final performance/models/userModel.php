<?php 
    require_once('db.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into users values('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['utype']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    
    function login($user){
        $con = getConnection();
        $sql = "select * from users where id='{$user['id']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>