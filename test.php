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
$type_list = $_POST['type'];
$_SESSION['Q_num'][0] = '1';
$_SESSION['Q_num'][1] = '2';
$_SESSION['Q_num'][2] = '3';
$idx = 0;
while($_SESSION['Q_num'][$idx] != null)
{
  $num .= '|'.$_SESSION['Q_num'][$idx];
  $idx++;
}
// print_r($_SESSION['Q_num']);
echo $num."</br>";
$_SESSION['Q_num'] = [];
$num = '';
// $_SESSION['Q_num'][0] = '4';
// $_SESSION['Q_num'][1] = '5';
// $_SESSION['Q_num'][2] = '6';

 ?>




    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
