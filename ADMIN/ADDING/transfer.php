<?php
session_start();

for($idx = 0; $idx < count($_POST['num']); $idx++)
{
  $_SESSION['Q_num'][$idx] = $_POST['num'][$idx];
}


 ?>
