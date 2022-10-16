<?php
    session_start();
    header('Location:Home.html');
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($username == 'John' && $password == '12345678') {

        $_SESSION['username'] = $username;
      } else {
        echo 'Incorrect username or password';
      }
    }

?>