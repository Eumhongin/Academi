<?php
session_start();
header("Content-Type:application/x-www-form-urlencoded");
include("..\module\EVENTdbConnect.php");
// echo "<script>alert(".$_POST['title'].");</script>";

  $sql = "INSERT INTO $_POST[dayOfWeek] (user_id, title, start_event, end_event, object)
  VALUES('".$_SESSION[stu_id][0]."', '".$_POST[title]."', '".$_POST[start]."', '".$_POST[end]."', $_POST[object]) ";

  $result = mysqli_query($conn2, $sql);

 ?>
