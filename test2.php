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
$sql = "(SELECT * FROM aca_db.question_list) union
(SELECT * FROM aca_db.question_list_korean) union
(SELECT * FROM aca_db.question_list_eng) union
(SELECT * FROM aca_db.question_list_social) union
(SELECT * FROM aca_db.question_list_science)
order by registerdate desc";

// // -- JOIN question_list_korean as k
// // --   ON m.student_id = k.student_id
// // -- JOIN question_list_eng as e
// // --   ON m.student_id = e.student_id
// $sql = "SELECT *
//         FROM question_list as m
//         JOIN question_list_social as so
//           ON m.student_id = so.student_id
//         JOIN question_list_science as sc
//           ON m.student_id = sc.student_id
//         limit 10";
//         // WHERE m.student_id = 'aaaa1111' and m.no = 10
//         //order by m.registerdate desc limit 10";

$get[0] = DB_echo($sql, 'no');
$get[1] = DB_echo($sql, 'title');
$get[2] = DB_echo($sql, 'question_num');
$get[3] = DB_echo($sql, 'student_id');
$get[4] = DB_echo($sql, 'checked');
$get[5] = DB_echo($sql, 'registerdate');
$get[7] = DB_echo($sql, 'subject');

print_r($get);

 ?>




    <!-- <script src="ADMIN/js/add.js" charset="utf-8"></script> -->
  </body>
</html>
