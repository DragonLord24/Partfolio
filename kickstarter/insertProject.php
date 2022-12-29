<?php
  $connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
    if ($connect== false) {
          echo " {не подключено} ";
    } else{
          echo " {подключено} ";
    }

    $insert = "INSERT INTO projects (title, text, goal, donated, img) VALUES ('{$_GET["title"]}', '{$_GET["text"]}', '{$_GET["goal"]}', '{$_GET["donated"]}', '{$_GET["img"]}')";

    $result_insert = mysqli_query($connect, $insert);

    if ($result_insert== false) {
          echo " {не отправленно} ";
    } else{
          echo " {отправленно} ";
    }

    header("Location: index.php")
?>
