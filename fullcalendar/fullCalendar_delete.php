<?php
    session_start();
    include("..\module\\EVENTdbConnect.php");

    $sql = "SELECT * FROM $_POST[dayOfWeek] WHERE no='".$_POST[id]."'";

    $i = 0;
    $result = mysqli_query($conn2, $sql);
    while($row = mysqli_fetch_array($result))
    {
      $_SESSION['eventObject'] = $row['object'];
      $_SESSION['reserve_name'] = $row['reserve_name'];
    }

    $sql = "DELETE FROM $_POST[dayOfWeek] WHERE no='".$_POST[id]."'";
    mysqli_query($conn2, $sql);
 ?>
