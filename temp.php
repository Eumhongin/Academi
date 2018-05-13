<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv='refresh' content='0;url=/test'>-->
    <title></title>
  </head>
  <body>
    <?php
      echo "mysql 연결 테스트<br>";

      $db = mysqli_connect("192.168.61.141","root","misozium23","aca_db","3306");
      if($db)
      {
        echo " 성공------";
      }else{
        echo "실패!!!!!!!";
      }

     ?>
    시작됐다
    <button onclick ="location.href = 'LOGIN/login.php'">로그인</button>
    <button onclick="location.href = 'guest.php'">게스트 화면</button>

  <!--  <button onclick="location.href = 'ADMIN/aca_admin.php'">관리자</button>
    <button onclick="location.href = 'STUDENT/aca_student.php'">학생</button>-->
    <!--<input type="button" name="" value="관리자" onclick="aca_admin.php">
    <input type="button" name="" value="학생" onclick="aca_student.php">-->
  </body>
</html>
