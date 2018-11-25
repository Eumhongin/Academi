<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("module\dbConnect.php");
      include("module\dbContentsEcho.php");
      include("module\url_access_denied.php");

      $sql1 = "SELECT * FROM member WHERE id='".$_POST['LOG_id']."'";

      $pw_salt = DB_echo($sql1,'pw_salt');
      $pw_hash = hash('sha256',$_POST['LOG_pw'].$pw_salt[0], false);

      $pw_check = DB_echo($sql1,'pw_hash');
      if($pw_check[0] != $pw_hash)
      {

        echo ("<script>alert('ID 혹은 Password를 다시 확인해주세요.');</script>");
        echo("<script>location.href = 'intro';</script>");

      }else {

        $s_t = DB_echo($sql1, 'stu_tea');
        $name = DB_echo($sql1, 'name');

        if($s_t[0] == 0)
        {
          $_SESSION['LOG_id'] = $_POST['LOG_id'];
          $_SESSION['LOG_name'] = $name[0];
          echo ("<script>alert('$name[0] 선생님 안녕하세요.');</script>");
          echo("<script>location.href = 'intro/Temp.html';</script>");

        }else if($s_t[0] == 1)
        {
          $_SESSION['LOG_id'] = $_POST['LOG_id'];
          $_SESSION['LOG_name'] = $name[0];
          echo ("<script>alert('$name[0] 학생 반가워요.');</script>");
          echo("<script>location.href = 'STUDENT/aca_student.php';</script>");
        }
      }


      mysqli_close($conn);


      ?>



  </body>
</html>
