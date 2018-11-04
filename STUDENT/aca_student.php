<?php
session_start();

include("..\module\dbConnect.php");
include("..\module\dbContentsEcho.php");

$sql = "SELECT * FROM member WHERE id = '".$_SESSION[LOG_id]."' ";

$_SESSION['stu_id'] = DB_echo($sql, 'id');
$_SESSION['stu_name'] = DB_echo($sql, 'name');
$_SESSION['stu_school_name'] = DB_echo($sql, 'school_name');
$_SESSION['stu_school_level'] = DB_echo($sql, 'school_level');
$_SESSION['stu_grade'] = DB_echo($sql, 'grade');
$_SESSION['stu_phone_num'] = DB_echo($sql, 'phone_num');
$_SESSION['stu_parents_phone_num'] = DB_echo($sql, 'parents_phone_num');
$_SESSION['stu_address'] = DB_echo($sql, 'address');
$_SESSION['stu_affiliation'] = DB_echo($sql, 'affiliation');
$_SESSION['stu_manager_name'] = DB_echo($sql, 'manager_name');
$_SESSION['stu_team_leader'] = DB_echo($sql, 'team_leader');


if($_SESSION['stu_id'] != null)
{
  echo("<script>location.href = 'index.php';</script>");
} else {

  echo ("<script>alert('==내용 없음==');</script>");
  echo ("<script>location.href = '../intro';</script>");
}
 ?>
