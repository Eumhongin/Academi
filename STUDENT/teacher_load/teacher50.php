<?php
include("..\..\module\EVENTdbConnect.php");
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\sub_src\\teacher_calendar_load.php");


  // $day_sql = "SELECT * FROM member WHERE stu_tea = 0";
  // $teacher_id = DB_echo($day_sql, 'id');
  // $teacher_num = DB_echo($day_sql, 'school_name');//선생님 번호

setSQL('50');

echo json_encode($GLOBALS['data']);
 ?>
