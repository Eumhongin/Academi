<?php
    session_start();
    include("..\module\EVENTdbConnect.php");

    if($_POST['check'] == null) //리사이즈 업데이트
    {
      $title = $_POST['title'];
      $start = $_POST['start'];
      $end = $_POST['end'];
      $id = $_POST['id'];

      $sql = "UPDATE $_POST[dayOfWeek] SET title = '".$title."', start_event = '".$start."' ,end_event = '".$end."' WHERE no = '".$id."'";
      mysqli_query($conn2, $sql);
    }
    else if($_POST['check'] == 1)  //타이틀 변경 업데이트
    {
      $title = $_POST['title'];
      $id = $_POST['id'];

      $sql = "UPDATE $_POST[dayOfWeek] SET title = '".$title."' WHERE no = '".$id."'";
      mysqli_query($conn2, $sql);
    }
    // else if($_POST['check'] == 2) //드랍 업데이트 - 옮긴 정보 DB에 추가
    // {
    //
    //   $sql = "UPDATE $_POST[dayOfWeek] ";
    //
    // }


 ?>
``
