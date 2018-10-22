<?php

    include("module\\dbConnect.php");
    include("module\\dbContentsEcho.php");

    $sql = "DELETE FROM test_events WHERE id='".$_POST[id]."'";
    mysqli_query($conn, $sql);
 ?>
