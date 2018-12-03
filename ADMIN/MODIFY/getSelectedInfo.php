<!DOCTYPE html>
<?php
session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");


$_SESSION['getSelectedTitle'] = $_POST['title'];

 ?>
