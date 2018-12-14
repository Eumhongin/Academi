<?php
include("module\dbConnect.php");
include("module\dbContentsEcho.php");

if($_FILES['upload'] != null)
{
  $uploaddir = ''.$_SERVER["DOCUMENT_ROOT"].'\academi\Academi\\';
  // $uploaddir2 = ''.$_SERVER["DOCUMENT_ROOT"].'\academi\Academi\\';
  $_FILES['upload']['name'] = "1-1-11.png";
  $_FILES['upload2']['name'] = "2-2-22.png";
  //학년_과목_문제지이름_유형_쪽수_문제번호.jpg
  $file_name = "1-1-11.png";
  $file_name2 = "2-2-22.png";

  $uploadfile = $uploaddir . basename($_FILES['upload']['name']);
  $uploadfile2 = $uploaddir . basename($_FILES['upload2']['name']);



  if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {

    echo "<script>alert('1111사진 등록 성공');</script>";
    // print_r($_FILES);
    // echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('1111사진 등록 실패');</script>";
    // echo "<script>location.href ='add.php';</script>";
  }

  if (move_uploaded_file($_FILES['upload2']['tmp_name'], $uploadfile2)) {

    echo "<script>alert('2222 등록 성공');</script>";
    // print_r($_FILES);
    // echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('사진 등록 실패');</script>";
    // echo "<script>location.href ='add.php';</script>";
  }

}
 ?>
