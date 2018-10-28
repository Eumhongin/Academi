<?php
session_start();
header("Content-Type:application/x-www-form-urlencoded");
include("..\module\dbConnect.php");
include("..\module\dbContentsEcho.php");
// echo "<script>alert(".$_POST['title'].");</script>";

  $sql = "INSERT INTO test_events (title, start_event, end_event)
  VALUES('".$_POST[title]."','".$_POST[start]."', '".$_POST[end]."')
  ";

  $result = mysqli_query($conn, $sql);

  if($result != null)
  {
    $aaa = $result;
  }else {$aaa = "no";}
echo json_encode($aaa);
 ?>
