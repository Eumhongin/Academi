<!DOCTYPE html>
<?php
session_start();
include("..\..\module\url_access_denied.php");

 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo $_SESSION['getSelectedTitle']; ?>
   </body>
 </html>
