<?php
session_start();

include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");

$sql = "SELECT * FROM member WHERE stu_tea = 0";
$num[0] = DB_echo($sql,'school_name');
$num[1] = DB_echo($sql, 'name');
$num[2] = DB_echo($sql, 'id');

// print_r($num);
echo json_encode($num);

 ?>
