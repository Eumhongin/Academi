<!DOCTYPE html>
<?php
  //session_start();
  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $sql = "SELECT image FROM question_image WHERE level=5 order by rand() limit 10";
      $print = DB_echo($sql,'image');

      for($idx = 0; $idx < count($print); $idx++)
      {
        echo "<div><img src='../ADDING/img/$print[$idx]'></div>";
      }
      //echo "adf";
     ?>
  </body>
</html>
