<?php 
    require_once('db.php');

    function insertEmployee($user){
        $con = getConnection();
        $sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function deleteEmployee($user){
        $con = getConnection();
        
    }

    function editEmployee($id){
        $con = getConnection();
        
    }

    function searchManagerById($id,$pwd){
        $con = getConnection();
        $uid = $id;
        $pass = $pwd;
        $sql = "select pos from administrations where id=$uid and pass=$pass";
        $status = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($status)) {
            $pos = $row['pos'];
        };
        return $pos;
    }

    function searchAssistantById($id,$pwd){
        $con = getConnection();
        $uid = $id;
        $pass = $pwd;
        $sql = "select pos from administrations where id=$uid and pass=$pass";
        $status = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($status)) {
            $pos = $row['pos'];
        };
        return $pos;
    }

    function allEmployee($id){
        $con = getConnection();
        
    }

    function loginEmployee($user){
        $con = getConnection();
        $uid = $user['userid'];

        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>