<?php
session_start();

include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");


$sql = "UPDATE member
SET school_name = '".$_POST[stu_school_name]."', grade = '".$_POST[stu_grade]."',
 name = '".$_POST[stu_name]."', phone_num = '".$_POST[stu_phone_num]."',
 parents_phone_num = '".$_POST[stu_parents_phone_num]."', address = '".$_POST[stu_address]."',
 affiliation = '".$_POST[stu_affiliation]."', manager_name = '".$_POST[stu_manager_name]."',
 team_leader = '".$_POST[stu_team_leader]."'
WHERE id = '".$_SESSION[stu_id][0]."'";

mysqli_query($conn, $sql);

echo ("<script>alert('변경된 정보를 저장했습니다.');</script>");
echo("<script>location.href = history.go(-1);</script>");

//echo $_POST['']."</br>";


?>
