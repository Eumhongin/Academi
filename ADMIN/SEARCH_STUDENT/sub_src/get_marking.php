<?php
session_start();
include("../../../module/dbConnect.php");
include("../../../module/dbContentsEcho.php");

$sql = "(SELECT * FROM aca_db.question_list WHERE student_id = '".$_SESSION[stu_id][0]."') union
(SELECT * FROM aca_db.question_list_korean WHERE student_id = '".$_SESSION[stu_id][0]."') union
(SELECT * FROM aca_db.question_list_eng WHERE student_id = '".$_SESSION[stu_id][0]."') union
(SELECT * FROM aca_db.question_list_social WHERE student_id = '".$_SESSION[stu_id][0]."') union
(SELECT * FROM aca_db.question_list_science WHERE student_id = '".$_SESSION[stu_id][0]."') union
(SELECT * FROM aca_db.eng_words_print_list WHERE student_id = '".$_SESSION[stu_id][0]."')
order by registerdate desc limit 10";

$get[0] = DB_echo($sql, 'no');
$get[1] = DB_echo($sql, 'title');
$get[2] = DB_echo($sql, 'question_num');
$get[3] = DB_echo($sql, 'student_id');
$get[4] = DB_echo($sql, 'checked');
$get[5] = DB_echo($sql, 'registerdate');
$get[7] = DB_echo($sql, 'subject');

// //////////////////////////////////////

//check 0과 1을 o와 x로 바꾸는거
for($idx = 0; $idx < count($get[4]); $idx++)
{
  if($get[4][$idx] == 0)
  {
    $get[4][$idx] = 'x';
  }else if($get[4][$idx] == 1)
  {
    $get[4][$idx] = 'o';
  }

  switch ($get[7][$idx]) {
    case 1:
        $get[8][$idx] = '국어';
      break;

    case 2:
        $get[8][$idx] = '수학';
      break;

    case 3:
        $get[8][$idx] = '영어';
      break;

    case 4:
        $get[8][$idx] = '사회';
      break;

    case 5:
        $get[8][$idx] = '과학';
      break;

    case 6:
        $get[8][$idx] = '영어단어';
      break;

  }
}


// y-m-d h-m-s 구조의 날짜를 Y-m-d 구조로 바꾸는 과정
for($idx = 0; $idx < count($get[5]); $idx++)
{
  $get[5][$idx] = date("Y-m-d", strtotime($get[5][$idx]));
}

// 문제 번호만 골라내는 것.
for($idx = 0; $idx < count($get[0]); $idx++)
{
  $get[6][$idx] = explode("|", $get[2][$idx]);
}



// $get[4][0] = explode("|", $get[1][0]);
// $get[4][1] = explode("|", $get[1][1]);
// $get[4][2] = explode("|", $get[1][2]);
// $get[4][3] = explode("|", $get[1][3]);
// $get[4][4] = explode("|", $get[1][4]);
// $get[4][5] = explode("|", $get[1][5]);

///////////////////////////////////////////

echo json_encode($get);
 ?>
