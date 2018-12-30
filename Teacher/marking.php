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

// $_SESSION['abcd'] = $_POST['number'];
$idx3=0;


switch ($_POST['subject']) {
  case 1:
      $subject[0] = '_korean';
    break;

  case 2:
      $subject[0] = '';
    break;

  case 3:
      $subject[0] = '_eng';
    break;

  case 4:
      $subject[0] = '_social';
    break;

  case 5:
      $subject[0] = '_science';
    break;

  case 6:
      $subject[0] = 'eng_words_print_list';
    break;
}

// $grade = DB_echo("SELECT grade FROM question_list WHERE no='".$_POST[no]."'", 'grade');
if($subject[0] != 'eng_words_print_list')
{
  $correctNum = DB_echo("SELECT question_num FROM question_list".$subject[0]." WHERE no = '".$_POST[no]."'", 'question_num');
  $correctNum = explode("|", $correctNum[0]);


  for($idx = 0; $idx < count($_POST['number']); $idx++)
  {
    $get[$idx] = DB_echo("SELECT tmi.type_index_name
            FROM question_image as qi
            JOIN question_type".$subject[0]."_index as tmi
            ON qi.type_index_num = tmi.type_index_num
            WHERE qi.no = '".$_POST[number][$idx]."'", 'type_index_name');

    $sql2 = "UPDATE correct".$subject[0]." SET `".$get[$idx][0]."` = `".$get[$idx][0]."`-1  WHERE no = '".$_POST[no]."'";
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


  $sql3 = "UPDATE question_list".$subject[0]." SET checked=1  WHERE no = '".$_POST[no]."'";
  mysqli_query($conn, $sql3);


  $total = count($_POST['number']);
  $sql5 = "UPDATE correct".$subject[0]." SET total = total-'".$total."' WHERE no = '".$_POST[no]."'";
  mysqli_query($conn, $sql5);


  echo json_encode($get);

}else{


  $correctNum = DB_echo("SELECT question_num FROM ".$subject[0]." WHERE no = '".$_POST[no]."'", 'question_num');
  $correctNum = explode("|", $correctNum[0]);


  for($idx = 0; $idx < count($_POST['number']); $idx++)
  {
    $sql = "UPDATE eng_words SET wrong_student = CONCAT(wrong_student,'|".$_SESSION[stu_id][0]."') WHERE no ='".$_POST[number][$idx]."'";
    mysqli_query($conn, $sql);

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

      $sql = "UPDATE eng_words SET wrong_student = REPLACE(wrong_student,'|".$_SESSION[stu_id][0]."', '') WHERE no = '".$correctNum[$idx2]."'";
      mysqli_query($conn, $sql);

      $sql = "SET SQL_SAFE_UPDATES=1";
      mysqli_query($conn,$sql);
    }
  }

  $sql3 = "UPDATE eng_words_print_list SET checked=1  WHERE no = '".$_POST[no]."'";
  mysqli_query($conn, $sql3);

echo json_encode('ok');

}




 ?>
