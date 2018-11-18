<?php
session_start();

include("..\..\..\module\dbConnect.php");
include("..\..\..\module\dbContentsEcho.php");

$sql="SELECT type_index_name FROM question_type_math_index WHERE hide=1";
$get = DB_echo($sql, 'type_index_name');

if($_POST['check'] == 0)
{

  echo json_encode($get);

}else if($_POST['check'] == 1)
{

  $sql = "SELECT * FROM correct_math WHERE id = '".$_SESSION[stu_id][0]."' ";

  for($idx = 0; $idx < count($get); $idx++)
  {
    $correct[$idx] = DB_echo($sql, $get[$idx]);
  }



  $sql = "SELECT * FROM print_math WHERE id = '".$_SESSION[stu_id][0]."' ";

  for($idx = 0; $idx < count($get); $idx++)
  {
    $print[$idx] = DB_echo($sql, $get[$idx]);
  }


  $a = count($get) + 1;
  $b = count($correct[0]) + 1;

  for($idx = 0; $idx < count($get); $idx++)
  {
    for($idx2 = 0; $idx2 < count($correct[0]); $idx2++)
    {
      $correct[$idx][$b] += $correct[$idx][$idx2];
      $print[$idx][$b] += $print[$idx][$idx2];
    }
  }


  for($idx3 =0; $idx3 < count($get); $idx3++)
  {
    $total[$idx3] = ($correct[$idx3][$b] / $print[$idx3][$b]) * 100;
    if(is_nan($total[$idx3]))
    {
      $total[$idx3] = 0;
    }else{
      $total[$idx3]= round($total[$idx3],2);
    }
    // echo $correct[$idx3][$b]."<====>".$print[$idx3][$b]."</br>".$total[$idx3]."</br>==========</br>";
  }
  // $total = $_SESSION['stu_id'];
  // print_r($total);
    echo json_encode($total);
}
 ?>
