<?php
  $connect = mysqli_connect("127.0.0.1", "root", "", "Blog");
    if ($connect== false) {
          echo " {не подключено} ";
    } else{
          echo " {подключено} ";
    }

    $insert = "INSERT INTO users (login, password) VALUES ('{$_POST['login']}','{$_POST['password']}')";

    $result_add = mysqli_query($connect, $insert);

    header("Location: login.php")
?>
