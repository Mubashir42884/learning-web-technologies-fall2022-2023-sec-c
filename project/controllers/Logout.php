<?php 
    session_start();

    setcookie('status', 'true', time()-60, '/');
    header('location: Login.php');
?>