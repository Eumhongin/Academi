<!DOCTYPE html>
<?php
  session_start();
  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");
  include("..\..\module\url_access_denied.php");
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title><strong><?php echo $_POST['paper']; ?></strong></title>
  </head>
  <body>
    <?php
    $book_name[1] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name1]","book_name");
    $book_name[2] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name2]","book_name");
    $book_name[3] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name3]","book_name");
    $book_name[4] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name4]","book_name");

    $book_num[1] = $_POST['book_name1'];
    $book_num[2] = $_POST['book_name2'];
    $book_num[3] = $_POST['book_name3'];
    $book_num[4] = $_POST['book_name4'];

    $type_index_name[1] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type1]", "type_index_name");
    $type_index_name[2] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type2]", "type_index_name");
    $type_index_name[3] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type3]", "type_index_name");
    $type_index_name[4] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type4]", "type_index_name");

    $type_index_num[1] = $_POST['question_type1'];
    $type_index_num[2] = $_POST['question_type2'];
    $type_index_num[3] = $_POST['question_type3'];
    $type_index_num[4] = $_POST['question_type4'];

    if(($_POST['question_type2'] == 100) || ($_POST['question_type2'] == null)){$type_index_name[2][0] = 2;}
    if(($_POST['question_type3'] == 101) || ($_POST['question_type3'] == null)){$type_index_name[3][0] = 3;}
    if(($_POST['question_type4'] == 102) || ($_POST['question_type4'] == null)){$type_index_name[4][0] = 4;}


    print_r($_POST);

    $type_list = $_POST['type'];
    $type_val = [0,0,0,0];
    $idx = 0;
    while($type_list[$idx] != null)
    {
      $type_val[$type_list[$idx]] = 1;
      $idx++;
    }

      // 타입 받아오기.
      // $type_list = $_POST['type'];
      // $type = '';
      // $idx = 0;
      // while($type_list[$idx] != null)
      // {
      //   $type .= $type_list[$idx++]."_";
      // }
      echo "</br>".$type;
      if($_POST['wrong'] == null)
      {
        $_POST['wrong'] = 1;
      }
      $_POST['num'] = $_POST['num'] - $_POST['wrong'];
      
      $sql =
      "SELECT no, image FROM question_image
      WHERE level='".$_POST['difficult']."'
        and (type_index_num = '".$_POST['question_type1']."' or type_index_num = '".$_POST['question_type2']."' or type_index_num = '".$_POST['question_type3']."' or type_index_num = '".$_POST['question_type4']."' )
        and (book_num = '".$_POST['book_name1']."' or book_num = '".$_POST['book_name2']."' or book_num = '".$_POST['book_name3']."' or book_num = '".$_POST['book_name4']."')
        and grade = '".$_POST['grade']."'
        and type1 = '".$type_val[0]."'
        and type2 = '".$type_val[1]."'
        and type3 = '".$type_val[2]."'
        and type4 = '".$type_val[3]."'
      order by rand()
      limit $_POST[num]";
      echo "</br>".$sql."</br>";

      $i = 0;
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))
      {
        $print[$i] = $row['image'];
        $print_num[$i++] = $row['no'];
      }
      // $print = DB_echo($sql,'image');
      // $print_num = DB_echo($sql,'no');



      $A = 0;
      $B = 0;
      $C = 0;
      $D = 0;
      $total = 0;

      for($i = 0; $i < 5; $i++)
      {
        for($j = ($i+1); $j < 5; $j++)
        {
          if($book_num[$i] == $book_num[$j])
          {
            $book_num[$i] = 'x';
          }
        }
      }

      for($i = 4; $i > 0; $i--)
      {
        for($j = ($i-1); $j >0; $j--)
        {
          if($type_index_name[$i] == $type_index_name[$j])
          {
            $type_index_name[$i][0] = $i;
          }
        }
      }

      for($idx = 0; $idx < count($print); $idx++)
      {
        $list .= '|'.$print_num[$idx];
        echo "<div><img src='../ADDING/img/$print[$idx]'></div>";
        for($i = 1; $i < 5; $i++)
        {

            if(strpos($print[$idx], '1_2_'.$book_num[$i].'_'.$type_index_num[1].'') !== false)
            {
              $A++;
            }
            else if(strpos($print[$idx], '1_2_'.$book_num[$i].'_'.$type_index_num[2].'') !== false)
            {
              $B++;
            }else if(strpos($print[$idx], '1_2_'.$book_num[$i].'_'.$type_index_num[3].'') !== false)
            {
              $C++;
            }else if(strpos($print[$idx], '1_2_'.$book_num[$i].'_'.$type_index_num[4].'') !== false)
            {
              $D++;
            }

        }
      }
      //echo "adf";
      // echo "?";

      $total = $A + $B + $C + $D;

      $sql = "INSERT INTO print_math (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
              VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
      mysqli_query($conn,$sql);

      $sql2 = "INSERT INTO correct_math (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
              VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
      mysqli_query($conn,$sql2);

      $sql3 = "INSERT INTO question_list (title, question_num, teacher_id, student_id, checked)
              VALUES ('".$_POST[paper]."','".$list."', '".$_SESSION[LOG_id]."', '".$_POST[student_id]."', 0)";
      mysqli_query($conn,$sql3);


      print_r($print);
      echo "</br>".$type_index_num[1]."</br>".$type_index_num[2]."</br>".$type_index_num[3]."</br>".$type_index_num[4]."</br>".$sql2;
      echo "</br>".$book_num[1]."</br>".$book_num[2]."</br>".$book_num[3]."</br>".$book_num[4];
      echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";echo "</br>";
      echo $list;
      echo "</br>";echo "</br>";echo "</br>";
      echo $sql3;
      echo "</br>";echo "</br>";echo "</br>";
      print_r($type_index_name);
      echo "</br>";echo "</br>";echo "</br>";
      print_r($book_num);
      echo "</br>";echo "</br>";echo "</br>";
      echo $sql;
      echo "</br>";echo "</br>";echo "</br>";
      echo $sql2;
     ?>
  </body>
</html>
