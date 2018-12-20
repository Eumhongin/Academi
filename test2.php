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
  $_POST['uid'] = 'aaaa1111';
  $_POST['alphabet'] = 'a';
  $_POST['num'] = 4;
  $_POST['wrong_num'] = '';

  $sql = "(SELECT word, answer FROM eng_words
  WHERE checked LIKE '%".$_POST[uid]."%'
  and NOT wrong_student LIKE '%".$_POST[uid]."%'
  and word LIKE '".$_POST[alphabet]."%'
  limit $_POST[num])UNION
  (SELECT word, answer FROM eng_words
  WHERE checked LIKE '%".$_POST[uid]."%'
  and wrong_student LIKE '%".$_POST[uid]."%'
  and word LIKE '".$_POST[alphabet]."%'
  limit $_POST[wrong_num] )";



    $get[0] = DB_echo($sql, 'word');
    $get[1] = DB_echo($sql, 'answer');

print_r($get);
echo "</br>";

$sql = "SELECT no,word, answer FROM eng_words
WHERE NOT checked LIKE '%".$_POST[uid]."%'
and NOT wrong_student LIKE '%".$_POST[uid]."%'
and word LIKE '".$_POST[alphabet]."%'
limit $_POST[num]";


  $get[0] = DB_echo($sql, 'word');
  $get[1] = DB_echo($sql, 'answer');
print_r($get);
echo "</br>";echo "</br>";echo "</br>";echo "</br>";

$a = 15;
$b = $a/4;

echo ceil($b);
 ?>




    <!-- <script src="ADMIN/js/add.js" charset="utf-8"></script> -->
  </body>
</html>
