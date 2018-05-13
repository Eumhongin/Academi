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

    $member_pw = $_POST['pw'];
    $member_id = $_POST['id'];
    $member_name = $_POST['name'];
    $member_school_name = $_POST['school_name'];
    $member_school_level = $_POST['school_level'];
    $member_grade = $_POST['grade'];

    if($member_school_name == null )
    {
      $member_sort = 0; //선생님
    }else if($member_school_name != null)
    {
      $member_sort = 1; //학생
    }

    $sql = "INSERT INTO member (id, pw, school_name, school_level, grade, sort, name)
            VALUES ('$member_id','$member_pw','$member_school_name','$member_school_level','$member_grade','$member_sort','$member_name')";

    if($conn->query($sql))
    {
      echo ("<script>alert('회원가입이 완료되었습니다.');</script>");
      echo ("<script>location.href='Login.html';</script>");
    }
    else{
      echo ("<script>alert('ID가 중복됩니다.다른 ID를 입력해주세요.');</script>");
      echo ("<script>location.href='Login.html';</script>");
    }

    mysqli_close($conn);
     ?>
  </body>
</html>
