
<?php
session_start();
// include("module\dbConnect.php");
// include("module\dbContentsEcho.php");

$conn = mysqli_connect("localhost","root","misozium23");
$sqli = mysqli_select_db($conn,"test");

$time = date("Y-m-d H:i:s");

$sql = "UPDATE comment SET updatetime = '".$time."' WHERE todak = 5";
mysqli_query($conn, $sql);
       ?>
