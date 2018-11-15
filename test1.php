<!DOCTYPE html>

<?php session_start(); ?>

<?php include('module/rand_string.php');
include('module/dbConnect.php');
include('module/dbContentsEcho.php');
include("module\\EVENTdbConnect.php"); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $sql = "SELECT * FROM sun WHERE no=8";


    $i = 0;
    $result = mysqli_query($conn2, $sql);
    while($row = mysqli_fetch_array($result))
    {
      $_SESSION['eventObject'] = $row['object'];
      $_SESSION['reserve_name'] = $row['reserve_name'];

    }
    print_r($_SESSION['eventObject']);
    echo "</br>".$_SESSION['eventObject'];
    echo "</br>".$_SESSION['reserve_name'];
    echo "</br>";echo "</br>";echo "</br>";echo "</br>";



    echo "</br>".$_POST['stu_id'];
    echo "</br>".$_POST['stu_pw'];
    echo "</br>".$_POST['stu_school_level'];
    echo "</br>".$_POST['stu_phone_num'];
    echo "</br>".$_POST['stu_team_leader'];
    echo "</br>".$_POST['stu_name'];
    echo "</br>".$_POST['stu_school_name'];
    echo "</br>".$_POST['stu_parents_phone_num'];
    echo "</br>".$_POST['stu_manager_name'];
    echo "</br>".$_POST['stu_grade'];
    echo "</br>".$_POST['stu_address'];
    echo "</br>".$_POST['stu_affiliation'];
    echo "</br>".$_POST['stu_univ'];
    echo "</br>".$_POST['stu_score'];
    0101010
    이광진
    임중섭
    경원
    123123
    임주어
    3
    여기저기
    이과
    경대
    높다
     ?>
  </body>
</html>
