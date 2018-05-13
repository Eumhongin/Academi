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
    관리자 페이지
    <button onclick="location.href = '../index.php'">로고</button>
    <button onclick="location.href = 'MODIFY/modify.php'">문제 수정</button>
    <button onclick="location.href = 'ADDING/add.php'">문제 추가</button>
    <button onclick="location.href = 'PRINT/print.php'">문제 출력</button>
    <button onclick="location.href = 'SEARCH_STUDENT/search_stu.php'">학생조회</button>
    <button onclick="location.href = 'SETTING/setting.php'">설정</button>
  </body>
</html>
