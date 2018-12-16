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

<?php
$result[0][0] = DB_echo("SELECT book_name FROM question_korean_book_name","book_name");
$result[1] = DB_echo("SELECT book_num FROM question_korean_book_name","book_num");
$result[2] = DB_echo("SELECT type_index_name FROM question_type_korean_index WHERE hide=1", "type_index_name");
$result[3] = DB_echo("SELECT type_index_num FROM question_type_korean_index WHERE hide=1", "type_index_num");


print_r($result);
 ?>



    <!-- <script src="ADMIN/js/add.js" charset="utf-8"></script> -->
  </body>
</html>
