<?php
  $conn = mysqli_connect('localhost','root','um0723','aca_db');

  $sql = "SELECT 지수함수 FROM correct_math";
  $result = mysqli_query($conn,$sql);
  $total = 0;
  while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    //echo $row['지수함수']."<br />";
    $total +=$row['지수함수'];

  }
  echo $total;
  $sql = "SELECT 지수함수 FROM print_math";
  $result = mysqli_query($conn,$sql);
  $total1 = 0;
  while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
    //echo $row['지수함수']."<br />";
    $total1 +=$row['지수함수'];

  }
  echo $total1."<br />";
  echo $total/$total1*100;
  mysqli_close($conn);

 ?>
