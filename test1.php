<!DOCTYPE html>

<?php session_start(); ?>

<?php include('module/rand_string.php') ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo genRandom();


    $sql = "SELECT * FROM member WHERE stu_tea = 0";
    $num[0] = DB_echo($sql,'school_name'); //선생님 번호
    $num[1] = DB_echo($sql, 'name');
    $num[2] = DB_echo($sql, 'id');

    $sql2 = "SELECT * FROM member WHERE id ='".$_SESSION[LOG_id]."'";
    $num[3][0] =DB_echo($sql2, 'school_name');
    $num[3][1] =DB_echo($sql2, 'name');
    $num[3][2] =DB_echo($sql2, 'id');

    print_r($num[3][0]);

     ?>
  </body>
</html>