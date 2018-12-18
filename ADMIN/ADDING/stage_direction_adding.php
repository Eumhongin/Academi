<?php
session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");

if($_FILES['upload'] != null)
{
  $uploaddir = ''.$_SERVER["DOCUMENT_ROOT"].'\academi\Academi\ADMIN\ADDING\stage_direction_img\\';


  $_FILES['upload']['name'] =  "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(1).png";
  $_FILES['upload2']['name'] = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(2).png";
  $_FILES['upload3']['name'] = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(3).png";
  $_FILES['upload4']['name'] = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(4).png";
  //학년_과목_문제지이름_유형_쪽수_문제번호.jpg
  $file_name = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(1).png";
  $file_name2 = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(2).png";
  $file_name3 = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(3).png";
  $file_name4 = "".$_POST['grade']."_".$_POST['subject']."_".$_POST['book_name']."_".$_POST['question_type']."(4).png";

  $uploadfile = $uploaddir . basename($_FILES['upload']['name']);
  $uploadfile2 = $uploaddir . basename($_FILES['upload2']['name']);
  $uploadfile3 = $uploaddir . basename($_FILES['upload3']['name']);
  $uploadfile4 = $uploaddir . basename($_FILES['upload4']['name']);


  // $sql = "SELECT type_index_num FROM question_type_math_index WHERE type_index_name = '".$_POST['question_type']."' ";
  // $type_index_num = DB_echo($sql , "type_index_num");
  //
  // $sql = "SELECT book_num FROM question_book_name WHERE book_name='".$_POST['book_name']."'";
  // $book_num = DB_echo($sql, "book_num");


  // 문제 번호 엮는거
  $idx = 0;
  $num = '';
  while($_SESSION['Q_num'][$idx] != null)
  {
    $num .= '|'.$_SESSION['Q_num'][$idx];
    $idx++;
  }


    $sql = "INSERT INTO stage_direction (image, subject, NumberGroup)
    VALUES ('".$file_name."', $_POST[subject], '".$num."')";

    $result = mysqli_query($conn, $sql);
    $_SESSION['Q_num'] = [];




  if($result != null)
  {
    echo $num."</br>";
    echo "<script>alert('DB 등록 성공');</script>";
  }else
  {
    echo $sql."</br>";
    print_r($type_val);
    echo $file_name."</br>";
    echo $file_name2."</br>";
    echo $file_name3."</br>";
    echo $file_name4."</br>";
    echo $_POST['grade']."</br>";
    echo $_POST['page']."</br>";
    echo $_POST['difficult']."</br>";
    echo $book_num[0]."</br>";
    echo $type_index_num[0]."</br>";
    echo "<script>alert('".$type_val[0]."');</script>";
    echo "<script>alert('".$type_val[1]."');</script>";
    echo "<script>alert('".$type_val[2]."');</script>";
    echo "<script>alert('".$type_val[3]."');</script>";
    echo "<script>alert('DB 등록 실패. 입력내용 확인 바람.');</script>";
  }

  if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {

    echo "<script>alert('문제1 등록 성공');</script>";
    // print_r($_FILES);
    // echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('문제 등록 실패');</script>";
    // echo "<script>location.href ='add.php';</script>";
  }

  if (move_uploaded_file($_FILES['upload2']['tmp_name'], $uploadfile2)) {

      $sql = "INSERT INTO stage_direction (image, subject, NumberGroup)
      VALUES ('".$file_name2."', $_POST[subject], '".$num."')";

      $result = mysqli_query($conn, $sql);


    echo "<script>alert('문제2 등록 성공');</script>";
    // print_r($_FILES);
    // echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('문제2 등록 실패');</script>";
    // echo "<script>location.href ='add.php';</script>";
  }

  if (move_uploaded_file($_FILES['upload3']['tmp_name'], $uploadfile3)) {

      $sql = "INSERT INTO stage_direction (image, subject, NumberGroup)
      VALUES ('".$file_name3."', $_POST[subject], '".$num."')";

      $result = mysqli_query($conn, $sql);

    echo "<script>alert('문제3 등록 성공');</script>";
    // print_r($_FILES);
    // echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('문제3 등록 실패');</script>";
    // echo "<script>location.href ='add.php';</script>";
  }

  if (move_uploaded_file($_FILES['upload4']['tmp_name'], $uploadfile4)) {

      $sql = "INSERT INTO stage_direction (image, subject, NumberGroup)
      VALUES ('".$file_name4."', $_POST[subject], '".$num."')";

      $result = mysqli_query($conn, $sql);

    echo "<script>alert('문제4 등록 성공');</script>";
    // print_r($_FILES);
    // echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('문제4 등록 실패');</script>";
    // echo "<script>location.href ='add.php';</script>";
  }


}
 ?>
