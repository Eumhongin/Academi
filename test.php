<!DOCTYPE html>
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


// $conn = mysqli_connect("localhost","root","misozium23");
// $sqli = mysqli_select_db($conn,"test")
    ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <script src="ADMIN/js/jquery-min.js" charset="utf-8"></script>

  </head>
  <body>
    <!-- <img src='지문.PNG' style='width:100%'> -->

<?php

$sql = "SELECT word FROM eng_words WHERE word LIKE 'b%' and checked LIKE '%aaaa1111%'";
$word_count = DB_echo($sql, 'word');

echo count($word_count);
$a = ( 0 / 0) * 100;

echo $a;

if(is_nan($a))
{
  $a = 0;
}else{
  $a= round($a,2);
}
echo "</br>".$a;

 ?>




    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
