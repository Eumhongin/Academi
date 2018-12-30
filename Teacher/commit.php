<?php

include('../module/dbConnect.php');
include('../module/dbContentsEcho.php');
include("..\module\url_access_denied.php");
//include('../module/dbContentsEcho.php');

$name = $_POST['name'];
$id = $_POST['id'];
$pass = $_POST['pass'];
$ph = $_POST['ph'];
$token = $_POST['token'];

$sql = "SELECT * FROM token where token='$token'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result,MYSQLI_BOTH);
if($row['token'] == $token){
  $desql = "DELETE FROM hong WHERE no = 1";
  mysqli_query($conn,$desql);
  echo "<script>alert('회원가입이 완료되었습니다.');location.href='join.html'</script>";
}
else {
  echo "<script>alert('인증값이 맞지 않습니다.');location.href='join.html'</script>";

}

mysqli_close($conn);




 ?>
