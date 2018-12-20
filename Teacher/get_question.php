<?php

session_start();
include('../module/dbConnect.php');
include('../module/dbContentsEcho.php');
include("..\module\url_access_denied.php");


  switch ($_POST['subject']) {
    case 1:
        $_POST['subject'] = '_korean';
      break;

    case 2:
        $_POST['subject'] = '';
      break;

    case 3:
        $_POST['subject'] = '_eng';
      break;

    case 4:
        $_POST['subject'] = '_social';
      break;

    case 5:
        $_POST['subject'] = '_science';
      break;

    case 6:
        $_POST['subject'] = 'eng_words_print_list';
      break;
  }

  if($_POST['subject'] != 'eng_words_print_list')
  {
    $get = DB_echo("SELECT question_num FROM question_list$_POST[subject] WHERE no='".$_POST[number]."' and student_id = '".$_SESSION[stu_id][0]."'", 'question_num');
    $get[0] = explode("|", $get[0]);
    $get[1] = $_POST['number'];

  }else{
    $get = DB_echo("SELECT question_num FROM eng_words_print_list WHERE no ='".$_POST[number]."' and student_id = '".$_SESSION[stu_id][0]."'", 'question_num');
    $get[0] = explode("|", $get[0]);
    $get[1] = $_POST['number'];
  }

  echo json_encode($get);
?>
