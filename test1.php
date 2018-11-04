<?php
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


$sql = "INSERT INTO question_image (image, grade, page, number, level, book_name, type_index_num, type1, type2, type3, type4)
VALUES ('???123', 0, 0, 0, 0, 0, 5 , 0, 0, 0, 0)";

$result = mysqli_query($conn, $sql);


if($result == null)
{
  // echo $result2;
  echo "dasd??";
  echo "</br></br></br>널값이란다</br></br></br>";
}

$list = $_POST['type'];

echo "--------------val</br>";
$i = 0;
$val = [0,0,0,0];
while($list[$i] != null)
{
  $val[$list[$i]] = 1;
  $i++;
}
echo "--------------val pront_r</br>";
print_r($val);
echo "--------------</br>";
$aaa = [0,0,0,0];
print_r($aaa);
echo "</br>".$val[0]."</br>";
echo $val[1]."</br>";
echo $val[2]."</br>";
echo $val[3]."</br>";
// print_r($_POST['type']);
 ?>
