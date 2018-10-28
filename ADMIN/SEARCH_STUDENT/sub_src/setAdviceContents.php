<?php
  session_start();

  include("..\..\..\module\dbConnect.php");
  include("..\..\..\module\dbContentsEcho.php");

  $sql = "INSERT INTO advice (user_id, input_manager_name, contents)
          VALUES('".$_SESSION[stu_id][0]."', '".$_SESSION[LOG_id]."', '".$_POST[set]."')";

  mysqli_query($conn, $sql);





 ?>
