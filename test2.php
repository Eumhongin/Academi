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
$a = 12;


$b = 3;
$b_a = 'b4';

if($a == 1 || ($b == 3 && $b_a == 'b4'))
{
  echo '들어옴ㅋㅋ';
}
 ?>




    <!-- <script src="ADMIN/js/add.js" charset="utf-8"></script> -->
  </body>
</html>
