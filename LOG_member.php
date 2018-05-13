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

      $member_pw = $_POST['LOG_pw'];
      $member_id = $_POST['LOG_id'];
      $sql = "SELECT * FROM member WHERE id = '$member_id' AND pw ='$member_pw'";
      $result = $conn->query($sql);

      $row = $result->fetch_array(MYSQLI_ASSOC);
      if($row != null)
      {
        $_SESSION['LOG_id'] = $member_id;
        $_SESSION['LOG_pw'] = $member_pw;
        if($row[sort] == 0)
        {
          echo ("<script>alert('$row[name] 선생님 안녕하세요.');</script>");
          echo("<script>location.href = 'ADMIN/aca_admin.php';</script>");
        }else if($row[sort] == 1){
          echo ("<script>alert('$row[name] 학생 반가워요.');</script>");
          echo("<script>location.href = 'STUDENT/aca_student.php';</script>");
        }

      }
      else{
        echo ("<script>alert('ID 혹은 Password를 다시 확인해주세요.');</script>");
        echo("<script>location.href = 'Login.html';</script>");
      }
      mysqli_close($conn);


      ?>



  </body>
</html>
