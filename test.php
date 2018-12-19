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


$sql = "SELECT image, NumberGroup FROM stage_direction
        WHERE subject = '1'
        and (type_index_num = '2')
        and (book_num = '1' )
        and grade = '1'";
        // limit $_POST[num]";
        // order by rand()
$i = 0;
$result = mysqli_query($conn, $sql);
while($row  = mysqli_fetch_array($result))
{
  $print_namegrp[$i] = $row['image'];
  $print_numgrp[$i] = $row['NumberGroup'];
  $NumberGroup[$i] = explode('|',$print_numgrp[$i]);
  $ImageGroup[$i] = explode('|',$print_namegrp[$i]);
  $i++;

}

$idx = 0;
for($idx1 = 0; $idx1 < count($ImageGroup); $idx1++)
{
  for($idx2 = 1; $idx2 < count($ImageGroup[$idx1]); $idx2++)
  {//0번 인덱스는 비어있기 때문에 1번부터 시작함
    $stage_print[$idx++] = $ImageGroup[$idx1][$idx2];
  }
}

$idx = 0;
for($idx1 = 0; $idx1 < count($NumberGroup); $idx1++)
{
  for($idx2 = 1; $idx2 < count($NumberGroup[$idx1]); $idx2++)
  {//0번 인덱스는 비어있기 때문에 1번부터 시작함
    $print_num[$idx] = $NumberGroup[$idx1][$idx2];
    $sql = "SELECT image FROM question_image WHERE no = $print_num[$idx]";
    $print_num_image[$idx] = DB_echo($sql, 'image');
    $idx++;
  }
}


echo "숫자그룹";
print_r($NumberGroup);
echo "</br>";
echo "문제 사진 이름";
print_r($print_num_image);
echo "</br>";
echo "지문 사진 이름";
print_r($stage_print);
echo "</br>";
echo "문제사진 번호";
print_r($print_num);
echo "</br>";
echo "</br>";

print_r($ImageGroup);
echo "</br>";echo "</br>";
echo count($NumberGroup);
echo "</br>";
echo count($NumberGroup[0]);
 ?>




    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
