<?php

    include("..\module\\dbConnect.php");
    include("..\module\\dbContentsEcho.php");

    if($_POST['check'] == null)
    {
      $title = $_POST['title'];
      $start = $_POST['start'];
      $end = $_POST['end'];
      $id = $_POST['id'];

      $sql = "UPDATE test_events SET title = '".$title."', start_event = '".$start."' ,end_event = '".$end."' WHERE id = '".$id."'";
      mysqli_query($conn, $sql);
    }
    else {
      $title = $_POST['title'];
      $id = $_POST['id'];

      $sql = "UPDATE test_events SET title = '".$title."' WHERE id = '".$id."'";
      mysqli_query($conn, $sql);
    }

 ?>
``
