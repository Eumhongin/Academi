
<?php
session_start();
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");
include("..\..\module\\rand_string.php");


if($_POST['count'] > 0)
{
  echo "<script>alert('".$_POST['count']."');</script>";
  $desql = "DELETE FROM token WHERE no = 1";
  mysqli_query($conn,$desql);
}
    $key = genRandom();
    $sql = "INSERT INTO token(no,token) VALUES(1,'$key')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    echo json_encode($key);

?>
