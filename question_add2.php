<?php
// session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");

 if($_FILES['form2_upload'] != null)
{
  $uploaddir = ''.$_SERVER["DOCUMENT_ROOT"].'\academi\Academi\ADMIN\ADDING\img\\';
  $_FILES['form2_upload']['name'] = "".$_POST['school']."_".$_POST['grade']."_".$_POST['printname']."_".$_POST['difficult'].".png";
  $file_name = "".$_POST['school']."_".$_POST['grade']."_".$_POST['printname']."_".$_POST['difficult'].".png";
  $uploadfile = $uploaddir . basename($_FILES['form2_upload']['name']);

  $type_list = $_POST['type'];
  $type = '';
  $idx = 0;
  while($type_list[$idx] != null)
  {
    $type .= $type_list[$idx++]."_";
  }

  if($type == ''){$type = '없음';}

  echo "<script>alert('".$_FILES['form2_upload']['size']."==".$file_name."--".$_FILES['form2_upload']['name'].$uploadfile.$type."');</script>";
  //type_index_num = 99 는 비정규 문제
  $sql = "INSERT INTO question_image (image, grade, page, number, level, type_index_num, type)
  VALUES('".$file_name."', $_POST[grade], 0, 0, 0, 99, '".$type."')";
  $result = mysqli_query($conn, $sql);
  if($result != null)
  {
    echo "<script>alert('DB 등록 성공');</script>";
  }else
  {
    echo "<script>alert('DB 등록 실패. 입력내용 확인 바람.');</script>";
  }

  if (move_uploaded_file($_FILES['form2_upload']['tmp_name'], $uploadfile)) {
    echo "<script>alert('사진 등록 성공');</script>";
    print_r($_FILES);
  //  echo "<script>location.href ='add.php';</script>";
  } else {print_r($_FILES);
    echo "<script>alert('".$_FILES['form2_upload']['error'].$_FILES['form2_upload']['tmp_name'].$uploadfile."');</script>";
    echo "<script>alert('사진 등록 실패');</script>";
    //echo "<script>location.href ='add.php';</script>";
  }
}
 ?>
