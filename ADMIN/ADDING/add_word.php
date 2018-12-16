<?php
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\url_access_denied.php");


for($idx = 0; $idx < count($_POST['word']); $idx++)
{
  $sql = "INSERT INTO eng_words (word, answer, wrong_student) VALUES('".$_POST['word'][$idx]."', '".$_POST['answer'][$idx]."', '0')";
  mysqli_query($conn,$sql);
}

 ?>
