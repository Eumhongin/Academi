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

// $subject = DB_echo("SELECT subject FROM question_list WHERE no='19'", 'subject');
// switch ($subject[0]) {
//   case 1:
//       $subject[0] = 'korean';
//     break;
//
//   case 2:
//       $subject[0] = 'eng';
//     break;
//
//   case 3:
//       $subject[0] = 'math';
//     break;
//
//   case 4:
//       $subject[0] = 'social';
//     break;
//
//   case 5:
//       $subject[0] = 'science';
//     break;
// }
//     echo $subject[0]."</br>";
//
//     $num['a'] = 113;
//
//
//     $sql = "SELECT tmi.type_index_name
//             FROM question_image as qi
//             JOIN question_type_".$subject[0]."_index as tmi
//             ON qi.type_index_num = tmi.type_index_num
//             WHERE qi.no = '".$num[a]."'";
//     $get = DB_echo($sql, 'type_index_name');
//
//     $sql2 = "UPDATE correct_".$subject[0]." SET `".$get[0]."` = `".$get[0]."`-1  WHERE no = '".$_POST[no]."'";
//     mysqli_query($conn, $sql2);
//
//     $sql4 = "UPDATE question_image SET wrong_student = CONCAT(wrong_student,'|".$_SESSION[stu_id][0]."') WHERE no ='".$_POST[number][$idx]."'";
//     mysqli_query($conn, $sql4);
//
//     echo $sql."</br>";
//     echo $sql2."</br>";
//     echo $sql4."</br>";
//     print_r($get);echo"</br>";



 ?>




    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
