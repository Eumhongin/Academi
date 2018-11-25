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
}

$sql3 = "UPDATE question_list SET checked=1  WHERE no = '".$_POST[no]."'";
mysqli_query($conn, $sql3);


$total = count($_POST['number']);
$sql5 = "UPDATE correct_math SET total = total-'".$total."' WHERE no = '".$_POST[no]."'";
mysqli_query($conn, $sql5);


echo json_encode($get);
 ?>
