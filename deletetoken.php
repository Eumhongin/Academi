<?php
$getkey = $_POST['hello'];
//$getkey = 'nZ6Vl2p5sAgExoW1b8wEftqTcBcDhHhmKpjdSrVAs9zqWeI1Q5NjpBtTIAaIiR1g';
$conn = mysqli_connect('localhost','root','um0723','video');
$sql = "SELECT * FROM hong where token='$getkey'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_BOTH);
echo $row['token']."<br>";
echo $getkey;

if($row['token'] == $getkey){
  echo "정답입니다!";
  $desql = "DELETE FROM hong WHERE token='$getkey'";
  mysqli_query($conn,$desql);
}
else {
  echo "틀리쓰요";
}
//echo $row['token']."<br>";
// while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
//   echo $row['token']."<br>";
// }
//echo $result;

mysqli_close($conn);

 ?>
