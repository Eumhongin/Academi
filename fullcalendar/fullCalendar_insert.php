<?php
session_start();
header("Content-Type:application/x-www-form-urlencoded");
include("..\module\EVENTdbConnect.php");
// echo "<script>alert(".$_POST['title'].");</script>";
  if($_POST['check'] == 1)
  {//선생이 학생에게 스케줄 추가할 때

    $sql = "INSERT INTO $_POST[dayOfWeek] (user_id, title, start_event, end_event, object)
    VALUES('".$_SESSION[stu_id][0]."', '".$_POST[title]."', '".$_POST[start]."', '".$_POST[end]."', '".$_POST[object]."') ";

    $result = mysqli_query($conn2, $sql);

  }else if($_POST['check'] == 0)
  {// 학생이 선생님에게 예약 걸 때

    // $sql = "INSERT INTO $_POST[dayOfWeek] (user_id, title, start_event, end_event, object)
    // VALUES('".$_POST[user_id]."', '".$_POST[title]."', '".$_POST[start]."', '".$_POST[end]."', '6') ";

    $sql = "INSERT INTO $_POST[dayOfWeek] (user_id, title, start_event, end_event, object, reserve_name)
    VALUES('".$_POST[user_id]."', '".$_POST[title]."', '".$_POST[start]."', '".$_POST[end]."', '6', '".$_SESSION[LOG_id]."') ";

    $result = mysqli_query($conn2, $sql);

  }else if($_POST['check'] == 2)
  {// 선생님이 자기 스케줄 추가할 떄

    $sql = "INSERT INTO $_POST[dayOfWeek] (user_id, title, start_event, end_event, object)
    VALUES('".$_SESSION[LOG_id]."', '".$_POST[title]."', '".$_POST[start]."', '".$_POST[end]."', '".$_POST[object]."') ";

    $result = mysqli_query($conn2, $sql);

  }else if($_POST['check'] == 3)
  {

    $sql = "INSERT INTO $_POST[dayOfWeek] (user_id, title, start_event, end_event, object, reserve_name)
    VALUES('".$_SESSION[LOG_id]."', '".$_POST[title]."', '".$_POST[start]."', '".$_POST[end]."', '".$_SESSION[eventObject]."', '".$_SESSION[reserve_name]."') ";

    $result = mysqli_query($conn2, $sql);

  }else if($_POST['check'] == 4)
  {



  }

 ?>
