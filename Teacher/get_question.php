<?php

session_start();
include('../module/dbConnect.php');
include('../module/dbContentsEcho.php');


  $get = DB_echo("SELECT question_num FROM question_list WHERE no='".$_POST[number]."'", 'question_num');

  $get[0] = explode("|", $get[0]);

  echo json_encode($get);
?>
