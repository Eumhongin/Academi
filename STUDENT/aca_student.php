<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(!isset($_SESSION['LOG_id']))
    {
      echo ("<script>alert('로그인해야 이용가능 합니다.');</script>");
      echo("<script>location.href = '../index.html';</script>");
    }
     ?>

    학생페이지
    <button onclick="location.href = '../index.php'">로고</button>
  </body>
</html>
