
<?php
session_start();
include("module\dbConnect.php");
include("module\dbContentsEcho.php");



$arr = ['지수함수','2','지수함수','4'];

for($i =(count($arr) - 1); $i >= 0; $i--)
{
  for($j = ($i-1); $j >= 0; $j--)
  {
    if($arr[$i] == $arr[$j])
    {
      $arr[$i] = $j;

    }
  }
}

print_r($arr);
echo "</br>".count($arr);



       ?>
