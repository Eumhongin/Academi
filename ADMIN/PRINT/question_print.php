<!DOCTYPE html>
<?php
  //session_start();
  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title><strong><?php echo $_POST['paper']; ?></strong></title>
  </head>
  <body>
    <?php
    print_r($_POST);
      // 타입 받아오기.
      $type_list = $_POST['type'];
      $type = '';
      $idx = 0;
      while($type_list[$idx] != null)
      {
        $type .= $type_list[$idx++]."_";
      }
      echo "</br>".$type;
      $sql =
      "SELECT image FROM question_image
      WHERE level='".$_POST['difficult']."'
        and type_index_num = '".$_POST['question_type']."'
        and book_num = '".$_POST['book_name']."'
        and grade = '".$_POST['grade']."'
        and type LIKE '%".$type."%'
      order by rand()
      limit 10";

      $print = DB_echo($sql,'image');

      for($idx = 0; $idx < count($print); $idx++)
      {
        echo "<div><img src='../ADDING/img/$print[$idx]'></div>";
      }
      //echo "adf";
      echo "?";
     ?>
  </body>
</html>
