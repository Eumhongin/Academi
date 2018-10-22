<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $conn = mysqli_connect("localhost","root","misozium23");
    $sqli = mysqli_select_db($conn,"aca_db");

    $member_name = $_POST['name'];
    $member_school_name = $_POST['school_name'];
    $member_grade = $_POST['grade'];

    $sql = "SELECT * FROM member WHERE name = '$member_name' AND school_name ='$member_school_name' AND grade = '$member_grade'";

    $result = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if($row != null)
    {
      $_SESSION['name'] = $member_name;
      $_SESSION['school_name'] = $member_school_name;
      $_SESSION['grade'] = $member_grade;
      echo("<script>location.href = 'stu_info.php';</script>");
    } else {
      echo ("<script>location.href = '../../index.html';</script>");
    }



    mysqli_close($conn);
     ?>
  </body>
</html>
