<?php
session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");

if($_POST['chk'] == 0)
{
  $sql = "SELECT registerdate, image FROM question_image
   WHERE grade = $_POST[grade] and book_num = $_POST[book_name] and type_index_num = $_POST[question_type]
   ORDER BY no desc";

  mysqli_query($conn, $sql);

  $get[0] = DB_echo($sql, 'registerdate');
  $get[1] = DB_echo($sql, 'image');

  for($idx = 0; $idx < count($get[0]); $idx++)
  {
    $get[0][$idx] = date("Y-m-d", strtotime($get[0][$idx]));
  }

  echo json_encode($get);
  // echo json_encode($_POST['question_type']);

}else if($_POST['chk'] == 1)
{
  $sql = "SELECT registerdate, image FROM question_image ORDER BY no desc";
  mysqli_query($conn, $sql);

  $get[0] = DB_echo($sql, 'registerdate');
  $get[1] = DB_echo($sql, 'image');

  for($idx = 0; $idx < count($get[0]); $idx++)
  {
    $get[0][$idx] = date("Y-m-d", strtotime($get[0][$idx]));
  }

  echo json_encode($get);

}else if($_POST['chk'] == 2)
{
  $sql = "SELECT registerdate, image, no FROM question_image WHERE (subject = 1 or subject = 3) ORDER BY no desc";
  mysqli_query($conn, $sql);

  $get[0] = DB_echo($sql, 'registerdate');
  $get[1] = DB_echo($sql, 'image');
  $get[2] = DB_echo($sql, 'no');

  for($idx = 0; $idx < count($get[0]); $idx++)
  {
    $get[0][$idx] = date("Y-m-d", strtotime($get[0][$idx]));
  }

  echo json_encode($get);
}
 ?>
