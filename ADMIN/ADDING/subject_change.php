<?php
// session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");


// 국
if($_POST['drop_value'] == 1)
{

  $result[0] = DB_echo("SELECT book_name FROM question_korean_book_name","book_name");
  $result[1] = DB_echo("SELECT book_num FROM question_korean_book_name","book_num");
  $result[2] = DB_echo("SELECT type_index_name FROM question_type_korean_index WHERE hide=1", "type_index_name");
  $result[3] = DB_echo("SELECT type_index_num FROM question_type_korean_index WHERE hide=1", "type_index_num");

// 수
}else if($_POST['drop_value'] == 2)
{

  $result[0] = DB_echo("SELECT book_name FROM question_book_name","book_name");
  $result[1] = DB_echo("SELECT book_num FROM question_book_name","book_num");
  $result[2] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE hide=1", "type_index_name");
  $result[3] = DB_echo("SELECT type_index_num FROM question_type_math_index WHERE hide=1", "type_index_num");


// 영
}else if($_POST['drop_value'] == 3)
{

  $result[0] = DB_echo("SELECT book_name FROM question_eng_book_name","book_name");
  $result[1] = DB_echo("SELECT book_num FROM question_eng_book_name","book_num");
  $result[2] = DB_echo("SELECT type_index_name FROM question_type_eng_index WHERE hide=1", "type_index_name");
  $result[3] =DB_echo("SELECT type_index_num FROM question_type_eng_index WHERE hide=1", "type_index_num");


// 사
}else if($_POST['drop_value'] == 4)
{


  $result[0] = DB_echo("SELECT book_name FROM question_social_book_name","book_name");
  $result[1] = DB_echo("SELECT book_num FROM question_social_book_name","book_num");
  $result[2] = DB_echo("SELECT type_index_name FROM question_type_social_index WHERE hide=1", "type_index_name");
  $result[3] = DB_echo("SELECT type_index_num FROM question_type_social_index WHERE hide=1", "type_index_num");


// 과
}else if($_POST['drop_value'] == 5)
{

  $result[0] = DB_echo("SELECT book_name FROM question_science_book_name","book_name");
  $result[1] = DB_echo("SELECT book_num FROM question_science_book_name","book_num");
  $result[2] = DB_echo("SELECT type_index_name FROM question_type_science_index WHERE hide=1", "type_index_name");
  $result[3] = DB_echo("SELECT type_index_num FROM question_type_science_index WHERE hide=1", "type_index_num");
}

echo json_encode($result)
 ?>
