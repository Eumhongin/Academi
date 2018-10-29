<?php
  session_start();

  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");

  date_default_timezone_set('Asia/Seoul'); //시간 default값을 서울기준 시간으로 변경.



  $sql = "SELECT * FROM advice WHERE user_id = '".$_SESSION[stu_id][0]."'
          ORDER BY registerdate DESC";

  $data[0] = DB_echo($sql, 'contents');
  $data[1] = DB_echo($sql, 'registerdate');


  if( date("Y-m-d") == date("Y-m-d", strtotime($data[1][0])) )
  {
    $data[2] = 'true';
  }



  // y-m-d h-m-s 구조의 날짜를 Y-m-d 구조로 바꾸는 과정
  for($idx = 0; $idx < count($data[1]); $idx++)
  {
    $data[1][$idx] = date("Y-m-d", strtotime($data[1][$idx]));
  }


  echo json_encode($data);



 ?>
