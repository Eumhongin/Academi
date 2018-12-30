<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include("../../module/dbConnect.php");
    include("../../module/dbContentsEcho.php");
    include("../../module/url_access_denied.php");

    $member_name = $_POST['name'];
    $member_school_name = $_POST['school_name'];
    $member_grade = $_POST['grade'];
    $member_school_level = $_POST['school_level'];

    $_SESSION['subject'] = $_POST['subject'];

    $sql = "SELECT * FROM member WHERE name = '$member_name' AND school_name ='$member_school_name' AND grade = '$member_grade' AND school_level= '$member_school_level'";

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

    if($_SESSION['stu_grade'][0] == 4 && $_SESSION['stu_school_level'][0] == '중')
    {
      $sql = "UPDATE member SET grade = 1 , school_level = '고' WHERE id = '".$_SESSION[stu_id][0]."'";
      mysqli_query($conn, $sql);
    }

    $subject;
    switch ($_POST['subject']) {
      case 1:
          $GLOBALS['subject'] = '국어';
        break;

      case 2:
          $GLOBALS['subject'] = '수학';
        break;

      case 3:
          $GLOBALS['subject'] = '영어';
        break;

      case 4:
          $GLOBALS['subject'] = '사회';
        break;

      case 5:
          $GLOBALS['subject'] = '과학';
        break;

      case 6:
          $GLOBALS['subject'] = '영어단어';
        break;
    }

    if($_SESSION['stu_id'] != null)
    {
      echo("<script>location.href = 'stu_info.php?sub=".$subject."';</script>");
    } else {
      echo ("<script>alert('==내용 없음==');</script>");
      echo ("<script>location.href = 'search_stu.php';</script>");
    }



    mysqli_close($conn);
     ?>
  </body>
</html>
