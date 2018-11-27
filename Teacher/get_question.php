<?php

session_start();
include('../module/dbConnect.php');
include('../module/dbContentsEcho.php');
include("..\module\url_access_denied.php");


  $get = DB_echo("SELECT question_num FROM question_list WHERE no='".$_POST[number]."'", 'question_num');

  $get[0] = explode("|", $get[0]);
  $get[1] = $_POST['number'];

  echo json_encode($get);
?>
