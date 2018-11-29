
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");


// $conn = mysqli_connect("localhost","root","misozium23");
// $sqli = mysqli_select_db($conn,"test");

$correctNum = DB_echo("SELECT question_num FROM question_list WHERE no = 5", 'question_num');

$correctNum = explode("|",$correctNum[0]);
print_r($correctNum);
echo"</br>";echo"</br>";echo"</br>";
$array = [37 ,87 ,51 ,23];

for($idx = 0; $idx < count($array); $idx++)
{
  $sql4 = "UPDATE question_image SET wrong_student = CONCAT(wrong_student,'|".$_SESSION[stu_id][0]."') WHERE no ='".$array[$idx]."'";
  mysqli_query($conn, $sql4);
  for($idx2 = 0; $idx2 < count($correctNum); $idx2++)
  {
    if($array[$idx] == $correctNum[$idx2])
    {
      $correctNum[$idx2] = null;
    }

  }
}
print_r($correctNum);
echo"</br>";echo"</br>";echo"</br>";

for($idx2 = 0; $idx2 < count($correctNum); $idx2++)
{
  if($correctNum[$idx2] != null)
  {
    $sql = "SET SQL_SAFE_UPDATES=0";
    mysqli_query($conn,$sql);

    $sql = "UPDATE question_image SET wrong_student = REPLACE(wrong_student,'|".$_SESSION[stu_id][0]."', '') WHERE no = '".$correctNum[$idx2]."'";
    mysqli_query($conn, $sql);

    $sql = "SET SQL_SAFE_UPDATES=1";
    mysqli_query($conn,$sql);
  }
}

       ?>
