<!DOCTYPE html>
<?php
session_start();
include("..\module\dbConnect.php");
include("..\module\dbContentsEcho.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
  </head>
  <body>
    <?php

        $sql = "SELECT * FROM question_list
                WHERE student_id='aaaa1111'
                ORDER BY no DESC";

        $question_num = DB_echo($sql, 'question_num');

        print_r($question_num);
        echo "</br></br></br></br>";


     ?>
     <div class="all">
       <!-- <strong><p>1번째</p></strong>

       <br> -->
     </div>

     <br><br><br><br><br><br>

     <div class="set">

     </div>

     <script src="test_marking.js" charset="utf-8"></script>
  </body>
</html>
