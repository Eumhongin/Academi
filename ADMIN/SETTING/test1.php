<?php
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");


if($_POST['check'] == 0) //delete
{
  // $sql = "DELETE FROM question_type_math_index WHERE type_index_name = '".$_POST[type]."'";
  $sql = "UPDATE question_type_math_index SET hide = 0 WHERE type_index_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}



else if($_POST['check'] == 1)
{
  $sql = "INSERT INTO question_type_math_index (type_index_name, hide) VALUES ('".$_POST[type]."', 1)";
  mysqli_query($conn,$sql);

  $get = getLastField("SHOW COLUMNS FROM correct_math"); //dbContentsEcho.php에 있는 함수
  $sql = "ALTER TABLE correct_math ADD COLUMN `".$_POST[type]."` INT(11) DEFAULT null after `$get`";
  mysqli_query($conn,$sql);


  $get = getLastField("SHOW COLUMNS FROM print_math"); //dbContentsEcho.php에 있는 함수
  $sql = "ALTER TABLE print_math ADD COLUMN `".$_POST[type]."` INT(11) DEFAULT null after `$get`";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}



else if($_POST['check'] == 2)
{
  $sql = "UPDATE question_type_math_index
          SET type_index_name = '".$_POST[change]."'
          WHERE type_index_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);

  $sql ="ALTER TABLE correct_math CHANGE `".$_POST[name]."` `".$_POST[change]."` INT(11)";
  mysqli_query($conn, $sql);

  $sql ="ALTER TABLE print_math CHANGE `".$_POST[name]."` `".$_POST[change]."` INT(11)";
  mysqli_query($conn, $sql);
}



else if($_POST['check'] == 3)
{
  $sql = "UPDATE question_book_name SET hide = 0 WHERE book_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  echo json_encode($_POST['type']);
}



else if($_POST['check'] == 4)
{
  $sql = "INSERT INTO question_book_name (book_name, hide) VALUES ('".$_POST[type]."', 1)";
  mysqli_query($conn,$sql);
}



else if($_POST['check'] == 5)
{
  $sql = "UPDATE question_book_name
          SET book_name = '".$_POST[change]."'
          WHERE book_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
}

 ?>
