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
$subject;

function switch_subject($subject){
  switch ($subject) {
    case 1:
        $GLOBALS['subject'] = 'korean';
      break;

    case 2:
        $GLOBALS['subject'] = 'math';
      break;

    case 3:
        $GLOBALS['subject'] = 'eng';
      break;

    case 4:
        $GLOBALS['subject'] = 'social';
      break;

    case 5:
        $GLOBALS['subject'] = 'science';
      break;
  }
}

switch_subject(4);
echo $subject;

 ?>




    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
