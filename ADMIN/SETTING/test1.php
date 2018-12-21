<?php
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");


$subject;
function switch_subject($subject){
  switch ($subject) {
    case 1:
        $GLOBALS['subject'] = 'korean';
      break;

    case 2:
        $GLOBALS['subject'] = 'math';
      break;

    case 3:
        $GLOBALS['subject'] = 'eng';
      break;

    case 4:
        $GLOBALS['subject'] = 'social';
      break;

    case 5:
        $GLOBALS['subject'] = 'science';
      break;
  }
}

function switch_subject_book($subject){
  switch ($subject) {
    case 1:
        $GLOBALS['subject'] = '_korean';
      break;

    case 2:
        $GLOBALS['subject'] = '';
      break;

    case 3:
        $GLOBALS['subject'] = '_eng';
      break;

    case 4:
        $GLOBALS['subject'] = '_social';
      break;

    case 5:
        $GLOBALS['subject'] = '_science';
      break;
  }
}


if($_POST['check'] == 0) //delete
{
  switch_subject($_POST['subject']);
  // $sql = "DELETE FROM question_type_math_index WHERE type_index_name = '".$_POST[type]."'";
  $sql = "UPDATE question_type_".$subject."_index SET hide = 0 WHERE type_index_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}



else if($_POST['check'] == 1)
{
  switch_subject($_POST['subject']);
  $sql = "INSERT INTO question_type_".$subject."_index (type_index_name, hide) VALUES ('".$_POST[type]."', 1)";
  mysqli_query($conn,$sql);

  $get = getLastField("SHOW COLUMNS FROM correct_".$subject.""); //dbContentsEcho.php에 있는 함수
  $sql = "ALTER TABLE correct_".$subject." ADD COLUMN `".$_POST[type]."` INT(11) DEFAULT null after `$get`";
  mysqli_query($conn,$sql);


  $get = getLastField("SHOW COLUMNS FROM print_".$subject.""); //dbContentsEcho.php에 있는 함수
  $sql = "ALTER TABLE print_".$subject." ADD COLUMN `".$_POST[type]."` INT(11) DEFAULT null after `$get`";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);
}



else if($_POST['check'] == 2)
{
  switch_subject($_POST['subject']);
  $sql = "UPDATE question_type_".$subject."_index
          SET type_index_name = '".$_POST[change]."'
          WHERE type_index_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  // echo json_encode($_POST['type']);

  $sql ="ALTER TABLE correct_".$subject." CHANGE `".$_POST[name]."` `".$_POST[change]."` INT(11)";
  mysqli_query($conn, $sql);

  $sql ="ALTER TABLE print_".$subject." CHANGE `".$_POST[name]."` `".$_POST[change]."` INT(11)";
  mysqli_query($conn, $sql);
}



else if($_POST['check'] == 3)
{
  switch_subject_book($_POST['subject']);
  $sql = "UPDATE question".$subject."_book_name SET hide = 0 WHERE book_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
  echo json_encode($_POST['type']);
}



else if($_POST['check'] == 4)
{
  switch_subject_book($_POST['subject']);
  $sql = "INSERT INTO question".$subject."_book_name (book_name, hide) VALUES ('".$_POST[type]."', 1)";
  mysqli_query($conn,$sql);
}



else if($_POST['check'] == 5)
{
  switch_subject_book($_POST['subject']);
  $sql = "UPDATE question".$subject."_book_name
          SET book_name = '".$_POST[change]."'
          WHERE book_num = '".$_POST[type]."'";
  mysqli_query($conn,$sql);
}

 ?>
