<?php 
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "heptopass";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbname;
        global $dbpass;

        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }
?>