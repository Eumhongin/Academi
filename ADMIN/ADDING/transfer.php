<?php
session_start();

if($_POST['chk'] != 1)
{
  for($idx = 0; $idx < count($_POST['num']); $idx++)
  {
    $_SESSION['Q_num'][$idx] = $_POST['num'][$idx];
  }
}else if($_POST['chk'] == 1)
{
  if($_POST['already_chk'] == true)
  {
    $_POST['already_chk'] = 1;
  }else if($_POST['already_chk'] == false)
  {
    $_POST['already_chk'] = 0;
  }
  $_SESSION['wp']['wp_already_chk'] = $_POST['already_chk'];
  $_SESSION['wp']['wp_uid'] = $_POST['uid'];
  $_SESSION['wp']['wp_num'] = $_POST['num'];
  $_SESSION['wp']['wp_wrong_num'] = $_POST['wrong_num'];
  $_SESSION['wp']['wp_alphabet'] = $_POST['alphabet'];
}


 ?>
