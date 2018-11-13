<!DOCTYPE html>

<?php session_start(); ?>

<?php include('module/rand_string.php');
include('module/dbConnect.php');
include('module/dbContentsEcho.php'); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function delete_token()
    {
      $desql = "DELETE FROM hong WHERE no = 1";
      mysqli_query($GLOBALS['conn'],$desql);
    }

    delete_token();
     ?>
  </body>
</html>
