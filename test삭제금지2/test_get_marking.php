<?php
session_start();
include("..\module\dbConnect.php");
include("..\module\dbContentsEcho.php");

$sql = "SELECT * FROM question_list order by no desc";

$get[0] = DB_echo($sql, 'no');
$get[1] = DB_echo($sql, 'question_num');
$get[2] = DB_echo($sql, 'student_id');

// //////////////////////////////////////

$get[4][0] = explode("|", $get[1][0]);
$get[4][1] = explode("|", $get[1][1]);
$get[4][2] = explode("|", $get[1][2]);
$get[4][3] = explode("|", $get[1][3]);
$get[4][4] = explode("|", $get[1][4]);
$get[4][5] = explode("|", $get[1][5]);

///////////////////////////////////////////

echo json_encode($get);
 ?>
