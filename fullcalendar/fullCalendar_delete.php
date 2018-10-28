<?php
    session_start();
    include("..\module\\EVENTdbConnect.php");

    $sql = "DELETE FROM $_POST[dayOfWeek] WHERE no='".$_POST[id]."'";

    mysqli_query($conn2, $sql);
 ?>
