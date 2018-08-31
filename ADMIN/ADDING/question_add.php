<?php
if($_FILES['upload'] != null)
{
  $uploaddir = ''.$_SERVER["DOCUMENT_ROOT"].'\academi\Academi\question_add\\';
  $_FILES['upload']['name'] = "test1.jpg";

  $uploadfile = $uploaddir . basename($_FILES['upload']['name']);

  // $img_sql = "UPDATE userinfo SET AdviserImage = '".$_FILES['upload']['name']."' WHERE useruid=".$_SESSION['Uid']."";
  // mysqli_query($conn,$img_sql);

  // echo $uploadfile."</br>";
  // //$_FILES['upload']['type'] = "jpg";
  // //$_FILES['upload']['tmp_name'] = "hhh";
  //
  // print_r($_FILES['upload']);
  // print_r($_FILES['upload']['error']);

  if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
    echo "<script>alert('성공');</script>";
    echo "<script>location.href ='add.php';</script>";
  } else {
    echo "<script>alert('실패');</script>";
  }


}
 ?>
