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

$sql =
"SELECT no, image FROM question_image
WHERE level='5'
  and type_index_num = '5'
  and book_num = '3'
  and grade = '1'
  and type1 = '0'
  and type2 = '1'
  and type3 = '0'
  and type4 = '0'
order by rand()
limit 10";
//echo "</br>".$sql."</br>";
$i = 0;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
  $print[$i] = $row['image'];
  $print_num[$i++] = $row['no'];
}

for($idx = 0; $idx < count($print); $idx++)
{
  $list .= '|'.$print_num[$idx];
  echo "<div class='box' style='padding:5%;box-sizing:border-box;'><div class='content' style='height:100%'><img src='ADMIN/ADDING/img/$print[$idx]' style='width:100%'></div></div>";
}
echo $sql."</br>";

echo "</br></br></br></br>==================== 이 하 답 지 ====================</br></br></br></br>";
for($idx = 0; $idx < count($print); $idx++)
{
  $list .= '|'.$print_num[$idx];
  echo "<div class='box' style='padding:5%;box-sizing:border-box;'><div class='content' style='height:100%'><img src='ADMIN/ADDING/answer-img/ANSWER_$print[$idx]' style='width:100%'></div></div>";
}
 ?>



    <!-- <script src="ADMIN/js/add.js" charset="utf-8"></script> -->
  </body>
</html>
