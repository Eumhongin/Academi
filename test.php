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
$_SESSION['abcdefg']['a'] = 'a';
$_SESSION['abcdefg']['b'] = 'b';
$_SESSION['abcdefg']['c'] = 'c';

print_r($_SESSION['abcdefg']);

$_SESSION['abcdefg'] = [];

echo "</br>";
print_r($_SESSION);

 ?>




    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
