<?php
// session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");

if($_FILES['upload'] != null)
{
  $uploaddir = ''.$_SERVER["DOCUMENT_ROOT"].'\academi\Academi\ADMIN\ADDING\img\\';
  $_FILES['upload']['name'] = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."_".$_POST['page']."_".$_POST['num'].".png";
  //학년_과목_문제지이름_유형_쪽수_문제번호.jpg
  $file_name = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."_".$_POST['page']."_".$_POST['num'].".png";
  $uploadfile = $uploaddir . basename($_FILES['upload']['name']);

  $sql = "SELECT type_index_num FROM question_type_math_index WHERE type_index_name = '".$_POST['question_type']."' ";
  $type_index_num = DB_echo($sql , "type_index_num");
  // $img_sql = "UPDATE userinfo SET AdviserImage = '".$_FILES['upload']['name']."' WHERE useruid=".$_SESSION['Uid']."";
  // mysqli_query($conn,$img_sql);

  // echo $uploadfile."</br>";
  // //$_FILES['upload']['type'] = "jpg";
  // //$_FILES['upload']['tmp_name'] = "hhh";
  //
  // print_r($_FILES['upload']);
  // print_r($_FILES['upload']['error']);

  $type_list = $_POST['type'];
  $type = '';
  $idx = 0;
  while($type_list[$idx] != null)
  {
    $type .= $type_list[$idx++]."_";
  }
  if($type == ''){$type = '없음';}
  $sql = "INSERT INTO question_image (image, grade, page, number,level,type_index_num,type)
  VALUES ('".$file_name."','".$_POST[grade]."' ,'".$_POST[page]."', '".$_POST[num]."', $_POST[difficult], $type_index_num[0] ,'".$type."')";
  $result = mysqli_query($conn, $sql);
  if($result != null)
  {
    echo "<script>alert('DB 등록 성공');</script>";
  }else
  {
    echo "<script>alert('DB 등록 실패. 입력내용 확인 바람.');</script>";
  }

  if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
    echo "<script>alert('사진 등록 성공');</script>";
    echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('사진 등록 실패');</script>";
    echo "<script>location.href ='add.php';</script>";
  }

}
 ?>
