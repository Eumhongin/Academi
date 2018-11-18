
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


$_SESSION['arr'] = $_POST['arry'];

echo ($_SESSION['arr'][0]);
// echo json_encode($_POST['arry'][0])

       ?>
