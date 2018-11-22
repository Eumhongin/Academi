
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");

echo '?';
$array =[37,47,23];
//
// $sql = "SELECT tmi.type_index_name
//         FROM question_image as qi
//         JOIN question_type_math_index as tmi
//         ON qi.type_index_num = tmi.type_index_num
//         WHERE qi.no = '".$array[$idx]."'";
// //
//         $abc = DB_echo($sql, 'type_index_name');
//         print_r($abc);
//         //
//         $i = 0;
//       for($idx = 0; $idx < count($_POST['problem']); $idx++)
//       {
//         $result = mysqli_query($conn, "SELECT tmi.type_index_name FROM question_image as qi JOIN question_type_math_index as tmi ON qi.type_index_num = tmi.type_index_num WHERE qi.no = '".$_POST[problem][$idx]."'");
//         while($row = mysqli_fetch_array($result))
//         {
//           $value[$i] = $row['type_index_name'];
//           $i++;
//         }
//       }
//
//
// for($idx = 0; $idx < count($array); $idx++)
// {
//   $get[$idx] = DB_echo("SELECT tmi.type_index_name
//           FROM question_image as qi
//           JOIN question_type_math_index as tmi
//           ON qi.type_index_num = tmi.type_index_num
//           WHERE qi.no = '".$array[$idx]."'"
//           , 'type_index_name');
//   // $get[$idx] = DB_echo($sql, 'type_index_name');
// }
//
// echo $get[0]."</br>".$get[1]."</br>".$get[2]."</br>".$get[3]."</br>";
// // print_r($get);
// print_r($value);
  $total = count($array);
  $sql5 = "UPDATE correct_math SET total = total - '".$total."' WHERE no = 5";
  mysqli_query($conn, $sql5);
       ?>
