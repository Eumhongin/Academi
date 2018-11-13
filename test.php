<!DOCTYPE html>
<?php include('module/rand_string.php') ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-min.js" charset="utf-8"></script>
  </head>
  <body>


    <?php
    $key = genRandom();

    $conn = mysqli_connect('localhost','root','um0723','video');
    echo $key;
    $sql = "INSERT INTO hong(token) VALUES('$key')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);


     ?>
     <form class="" action="deletetoken.php" method="post">
       <input type="text" name="hello" value="">
       <button type="submit" name="button">제출</button>
     </form>

  </body>
</html>
