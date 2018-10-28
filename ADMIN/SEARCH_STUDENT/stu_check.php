<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include("..\..\module\dbConnect.php");
    include("..\..\module\dbContentsEcho.php");

    $member_name = $_POST['name'];
    $member_school_name = $_POST['school_name'];
    $member_grade = $_POST['grade'];

    $sql = "SELECT * FROM member WHERE name = '$member_name' AND school_name ='$member_school_name' AND grade = '$member_grade'";

    $_SESSION['stu_id'] = DB_echo($sql, 'id');
    $_SESSION['stu_name'] = DB_echo($sql, 'name');
    $_SESSION['stu_school_name'] = DB_echo($sql, 'school_name');
    $_SESSION['stu_school_level'] = DB_echo($sql, 'school_level');
    $_SESSION['stu_grade'] = DB_echo($sql, 'grade');
    $_SESSION['stu_phone_num'] = DB_echo($sql, 'phone_num');
    $_SESSION['stu_parents_phone_num'] = DB_echo($sql, 'parents_phone_num');
    $_SESSION['stu_address'] = DB_echo($sql, 'address');
    $_SESSION['stu_affiliation'] = DB_echo($sql, 'affiliation');
    $_SESSION['stu_manager_name'] = DB_echo($sql, 'manager_name');
    $_SESSION['stu_team_leader'] = DB_echo($sql, 'team_leader');


    if($_SESSION['id'] != null)
    {
      echo("<script>location.href = 'stu_info.php';</script>");
    } else {
      echo ("<script>alert('==내용 없음==');</script>");
      echo ("<script>location.href = 'search_stu.php';</script>");
    }



    mysqli_close($conn);
     ?>
  </body>
</html>
