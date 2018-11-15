<!DOCTYPE html>

<?php session_start(); ?>

<?php include('module/rand_string.php');
include('module/dbConnect.php');
include('module/dbContentsEcho.php');
include("module\\EVENTdbConnect.php"); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $sql = "SELECT * FROM sun WHERE no=8";


    $i = 0;
    $result = mysqli_query($conn2, $sql);
    while($row = mysqli_fetch_array($result))
    {
      $_SESSION['eventObject'] = $row['object'];
      $_SESSION['reserve_name'] = $row['reserve_name'];

    }
    print_r($_SESSION['eventObject']);
    echo "</br>".$_SESSION['eventObject'];
    echo "</br>".$_SESSION['reserve_name'];
     ?>
  </body>
</html>
