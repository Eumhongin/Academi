<!DOCTYPE html>
<?php
session_start();
include('../module/dbConnect.php');
include('../module/dbContentsEcho.php');
include("..\module\url_access_denied.php");
 ?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="font/font.css">
  <script src="js/jquery-min.js" charset="utf-8"></script>
</head>

<body>
  <?php
      // $sql = "SELECT * FROM question_list WHERE no='".$_GET[id]."'";

      $get = DB_echo("SELECT * FROM question_list WHERE no='".$_GET[id]."'",'question_num');

      $get[0] = explode("|", $get[0]);

    ?>
  <div class="wrapper">
    <div class="form">
    </div>
  </div>
  <script src="js/check.js" charset="utf-8"></script>
</body>

</html>
