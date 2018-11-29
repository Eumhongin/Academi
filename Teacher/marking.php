<?php
session_start();
include('../module/dbConnect.php');
include('../module/dbContentsEcho.php');
include("..\module\url_access_denied.php");
//correct_math에 맞춘거 넣기
// $sql = "SELECT tmi.type_index_name
//         FROM question_image as qi
//         JOIN question_type_math_index as tmi
//         ON qi.type_index_num = tmi.type_index_num
//         WHERE qi.no = '".$_POST[number][$idx]."'";

$_SESSION['abcd'] = $_POST['number'];
$idx3=0;

$correctNum = DB_echo("SELECT question_num FROM question_list WHERE no = '".$_POST[no]."'", 'question_num');
$correctNum = explode("|", $correctNum[0]);
///이부분~



for($idx = 0; $idx < count($_POST['number']); $idx++)
{
  $get[$idx] = DB_echo("SELECT tmi.type_index_name
          FROM question_image as qi
          JOIN question_type_math_index as tmi
          ON qi.type_index_num = tmi.type_index_num
          WHERE qi.no = '".$_POST[number][$idx]."'", 'type_index_name');

  $sql2 = "UPDATE correct_math SET `".$get[$idx][0]."` = `".$get[$idx][0]."`-1  WHERE no = '".$_POST[no]."'";
  mysqli_query($conn, $sql2);

  $sql4 = "UPDATE question_image SET wrong_student = CONCAT(wrong_student,'|".$_SESSION[stu_id][0]."') WHERE no ='".$_POST[number][$idx]."'";
  mysqli_query($conn, $sql4);

  for($idx2 = 0; $idx2 < count($correctNum); $idx2++)
  {
    if($_POST['number'][$idx] == $correctNum[$idx2])
    {
      $correctNum[$idx2] = null;///이부분~
    }
  }
}


for($idx2 = 0; $idx2 < count($correctNum); $idx2++)
{
  if($correctNum[$idx2] != null)
  {
    $sql = "SET SQL_SAFE_UPDATES=0";
    mysqli_query($conn,$sql);

    $sql = "UPDATE question_image SET wrong_student = REPLACE(wrong_student,'|".$_SESSION[stu_id][0]."', '') WHERE no = '".$correctNum[$idx2]."'";
    mysqli_query($conn, $sql);

    $sql = "SET SQL_SAFE_UPDATES=1";
    mysqli_query($conn,$sql);
  }
}


$sql3 = "UPDATE question_list SET checked=1  WHERE no = '".$_POST[no]."'";
mysqli_query($conn, $sql3);


$total = count($_POST['number']);
$sql5 = "UPDATE correct_math SET total = total-'".$total."' WHERE no = '".$_POST[no]."'";
mysqli_query($conn, $sql5);


echo json_encode($get);
 ?>
