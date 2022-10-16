<?php
    session_start();

    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($username == 'John' && $password == '12345678') {

        $_SESSION['username'] = $username;

        header('Location:Home.html');
      } else {
        echo 'Incorrect username or password';
      }
    }

?>