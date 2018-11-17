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
    // $key = genRandom();
    //
    // $conn = mysqli_connect('localhost','root','um0723','video');
    // echo $key;
    // $sql = "INSERT INTO hong(token) VALUES('$key')";
    // mysqli_query($conn,$sql);
    // mysqli_close($conn);


     ?>
     <!-- <form class="" action="deletetoken.php" method="post">
       <input type="text" name="hello" value="">
       <button type="submit" name="button">제출</button>
     </form> -->
     <?php
      // echo $_POST['book_name1']."</br>";
      // echo $_POST['book_name2']."</br>";
      // echo $_POST['book_name3']."</br>";
      // echo $_POST['book_name4']."</br>";
      // echo $_POST['question_type1']."</br>";
      // echo $_POST['question_type2']."</br>";
      // echo $_POST['question_type3']."</br>";
      // echo $_POST['question_type4']."</br>";
      //
      $a= 0;
      for($idx = 0; $idx < 17000; $idx++)
      {
        echo "<div><img src='../ADDING/img/$print[$idx]'></div>";
        $a++;
      }
      echo $a;
       ?>
  </body>
</html>
