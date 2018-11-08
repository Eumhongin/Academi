<?php
include("..\module\dbConnect.php");
include("..\module\dbContentsEcho.php");



if($_POST['check'] == 0) //delete
{
  // $sql = "DELETE FROM question_type_math_index WHERE type_index_name = '".$_POST[type]."'";
  $sql = "UPDATE question_type_math_index SET hide = 0 WHERE type_index_num = '".$_POST[type]."'";
  // mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}



if($_POST['check'] == 1)
{
  $sql = "INSERT INTO question_type_math_index (type_index_name) VALUES ('".$_POST[type]."')";
  // mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}



if($_POST['check'] == 2)
{
  $sql = "UPDATE question_type_math_index
          SET type_index_name = '".$_POST[change]."'
          WHERE type_index_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}


 ?>
