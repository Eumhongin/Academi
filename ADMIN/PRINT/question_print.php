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

    <title><?php echo $_POST['paper']; ?></title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
    if($_POST['subject'] == 1)
    {

      $book_name[1] = DB_echo("SELECT book_name FROM question_korean_book_name WHERE book_num =$_POST[book_name1]","book_name");
      $book_name[2] = DB_echo("SELECT book_name FROM question_korean_book_name WHERE book_num =$_POST[book_name2]","book_name");
      $book_name[3] = DB_echo("SELECT book_name FROM question_korean_book_name WHERE book_num =$_POST[book_name3]","book_name");
      $book_name[4] = DB_echo("SELECT book_name FROM question_korean_book_name WHERE book_num =$_POST[book_name4]","book_name");

      $type_index_name[1] = DB_echo("SELECT type_index_name FROM question_type_korean_index WHERE type_index_num=$_POST[question_type1]", "type_index_name");
      $type_index_name[2] = DB_echo("SELECT type_index_name FROM question_type_korean_index WHERE type_index_num=$_POST[question_type2]", "type_index_name");
      $type_index_name[3] = DB_echo("SELECT type_index_name FROM question_type_korean_index WHERE type_index_num=$_POST[question_type3]", "type_index_name");
      $type_index_name[4] = DB_echo("SELECT type_index_name FROM question_type_korean_index WHERE type_index_num=$_POST[question_type4]", "type_index_name");


    }else if($_POST['subject'] == 2)
    {

      $book_name[1] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name1]","book_name");
      $book_name[2] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name2]","book_name");
      $book_name[3] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name3]","book_name");
      $book_name[4] = DB_echo("SELECT book_name FROM question_book_name WHERE book_num =$_POST[book_name4]","book_name");

      $type_index_name[1] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type1]", "type_index_name");
      $type_index_name[2] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type2]", "type_index_name");
      $type_index_name[3] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type3]", "type_index_name");
      $type_index_name[4] = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE type_index_num=$_POST[question_type4]", "type_index_name");


    }else if($_POST['subject'] == 3)
    {

      $book_name[1] = DB_echo("SELECT book_name FROM question_eng_book_name WHERE book_num =$_POST[book_name1]","book_name");
      $book_name[2] = DB_echo("SELECT book_name FROM question_eng_book_name WHERE book_num =$_POST[book_name2]","book_name");
      $book_name[3] = DB_echo("SELECT book_name FROM question_eng_book_name WHERE book_num =$_POST[book_name3]","book_name");
      $book_name[4] = DB_echo("SELECT book_name FROM question_eng_book_name WHERE book_num =$_POST[book_name4]","book_name");

      $type_index_name[1] = DB_echo("SELECT type_index_name FROM question_type_eng_index WHERE type_index_num=$_POST[question_type1]", "type_index_name");
      $type_index_name[2] = DB_echo("SELECT type_index_name FROM question_type_eng_index WHERE type_index_num=$_POST[question_type2]", "type_index_name");
      $type_index_name[3] = DB_echo("SELECT type_index_name FROM question_type_eng_index WHERE type_index_num=$_POST[question_type3]", "type_index_name");
      $type_index_name[4] = DB_echo("SELECT type_index_name FROM question_type_eng_index WHERE type_index_num=$_POST[question_type4]", "type_index_name");


    }else if($_POST['subject'] == 4)
    {

      $book_name[1] = DB_echo("SELECT book_name FROM question_social_book_name WHERE book_num =$_POST[book_name1]","book_name");
      $book_name[2] = DB_echo("SELECT book_name FROM question_social_book_name WHERE book_num =$_POST[book_name2]","book_name");
      $book_name[3] = DB_echo("SELECT book_name FROM question_social_book_name WHERE book_num =$_POST[book_name3]","book_name");
      $book_name[4] = DB_echo("SELECT book_name FROM question_social_book_name WHERE book_num =$_POST[book_name4]","book_name");

      $type_index_name[1] = DB_echo("SELECT type_index_name FROM question_type_social_index WHERE type_index_num=$_POST[question_type1]", "type_index_name");
      $type_index_name[2] = DB_echo("SELECT type_index_name FROM question_type_social_index WHERE type_index_num=$_POST[question_type2]", "type_index_name");
      $type_index_name[3] = DB_echo("SELECT type_index_name FROM question_type_social_index WHERE type_index_num=$_POST[question_type3]", "type_index_name");
      $type_index_name[4] = DB_echo("SELECT type_index_name FROM question_type_social_index WHERE type_index_num=$_POST[question_type4]", "type_index_name");


    }else if($_POST['subject'] == 5)
    {

      $book_name[1] = DB_echo("SELECT book_name FROM question_science_book_name WHERE book_num =$_POST[book_name1]","book_name");
      $book_name[2] = DB_echo("SELECT book_name FROM question_science_book_name WHERE book_num =$_POST[book_name2]","book_name");
      $book_name[3] = DB_echo("SELECT book_name FROM question_science_book_name WHERE book_num =$_POST[book_name3]","book_name");
      $book_name[4] = DB_echo("SELECT book_name FROM question_science_book_name WHERE book_num =$_POST[book_name4]","book_name");

      $type_index_name[1] = DB_echo("SELECT type_index_name FROM question_type_science_index WHERE type_index_num=$_POST[question_type1]", "type_index_name");
      $type_index_name[2] = DB_echo("SELECT type_index_name FROM question_type_science_index WHERE type_index_num=$_POST[question_type2]", "type_index_name");
      $type_index_name[3] = DB_echo("SELECT type_index_name FROM question_type_science_index WHERE type_index_num=$_POST[question_type3]", "type_index_name");
      $type_index_name[4] = DB_echo("SELECT type_index_name FROM question_type_science_index WHERE type_index_num=$_POST[question_type4]", "type_index_name");


    }

    $book_num[1] = $_POST['book_name1'];
    $book_num[2] = $_POST['book_name2'];
    $book_num[3] = $_POST['book_name3'];
    $book_num[4] = $_POST['book_name4'];

    $type_index_num[1] = $_POST['question_type1'];
    $type_index_num[2] = $_POST['question_type2'];
    $type_index_num[3] = $_POST['question_type3'];
    $type_index_num[4] = $_POST['question_type4'];

    if(($_POST['question_type2'] == 100) || ($_POST['question_type2'] == null)){$type_index_name[2][0] = 2;}
    if(($_POST['question_type3'] == 101) || ($_POST['question_type3'] == null)){$type_index_name[3][0] = 3;}
    if(($_POST['question_type4'] == 102) || ($_POST['question_type4'] == null)){$type_index_name[4][0] = 4;}


    //print_r($_POST);

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
      //echo "</br>".$type;
      if($_POST['wrong'] == null)
      {
        $_POST['wrong'] = 0;
      }
      $_POST['num'] = $_POST['num'] - $_POST['wrong'];




      if(($_POST['subject'] == 1  && ($_POST['question_type1'] == 1 || $_POST['question_type1'] == 2 )) || ($_POST['subject'] == 3 && $_POST['question_type1'] == 4))
      {
        $sql = "SELECT image, NumberGroup FROM stage_direction
                WHERE subject = '".$_POST['subject']."'
                and (type_index_num = '".$_POST['question_type1']."' or type_index_num = '".$_POST['question_type2']."' or type_index_num = '".$_POST['question_type3']."' or type_index_num = '".$_POST['question_type4']."' )
                and (book_num = '".$_POST['book_name1']."' or book_num = '".$_POST['book_name2']."' or book_num = '".$_POST['book_name3']."' or book_num = '".$_POST['book_name4']."')
                and grade = '".$_POST['grade']."'
                order by rand()
                limit $_POST[num]";

        $i = 0;
        $result = mysqli_query($conn, $sql);
        while($row  = mysqli_fetch_array($result))
        {
          $print_namegrp[$i] = $row['image'];
          $print_numgrp[$i] = $row['NumberGroup'];
          $ImageGroup[$i] = explode('|',$print_namegrp[$i]);
          $NumberGroup[$i] = explode('|',$print_numgrp[$i]);
          $i++;
        }

        $idx = 0;
        for($idx1 = 0; $idx1 < count($ImageGroup); $idx1++)
        {
          for($idx2 = 1; $idx2 < count($ImageGroup[$idx1]); $idx2++)
          {//0번 인덱스는 비어있기 때문에 1번부터 시작함
            $stage_image_name[$idx++] = $ImageGroup[$idx1][$idx2];
          }
        }

        $idx = 0;
        for($idx1 = 0; $idx1 < count($NumberGroup); $idx1++)
        {
          for($idx2 = 1; $idx2 < count($NumberGroup[$idx1]); $idx2++)
          {//0번 인덱스는 비어있기 때문에 1번부터 시작함
            $print_num[$idx] = $NumberGroup[$idx1][$idx2];
            $sql = "SELECT image FROM question_image WHERE no = $print_num[$idx]";
            //
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $print[$idx] = $row['image'];

            //
            // $print[$idx] = DB_echo($sql, 'image');
            $idx++;

          }
        }

        // $idx3 = 0;
        // while($idx3 < count($print_num))
        // {
        //   $sql = "SELECT image FROM answer_image WHERE no = $print_num[$idx]";
        //   //
        //   $result = mysqli_query($conn, $sql);
        //   $row = mysqli_fetch_array($result);
        //   $print[$idx] = $row['image'];
        //
        //   //
        //   // $print[$idx] = DB_echo($sql, 'image');
        //   $idx++;
        //   $idx3++;
        // }

        for($idx1 = 0; $idx1 < count($stage_image_name); $idx1++)
        {
          echo "<div class='box' style='padding:5%;box-sizing:border-box;'><div class='content' style='height:100%'><img src='../ADDING/stage_direction_img/$stage_image_name[$idx1]' style='width:100%'></div></div>";
        }

      }else
      {
        $sql =
        "SELECT no, image FROM question_image
        WHERE subject = '".$_POST['subject']."'
          and level='".$_POST['difficult']."'
          and (type_index_num = '".$_POST['question_type1']."' or type_index_num = '".$_POST['question_type2']."' or type_index_num = '".$_POST['question_type3']."' or type_index_num = '".$_POST['question_type4']."' )
          and (book_num = '".$_POST['book_name1']."' or book_num = '".$_POST['book_name2']."' or book_num = '".$_POST['book_name3']."' or book_num = '".$_POST['book_name4']."')
          and grade = '".$_POST['grade']."'
          and type1 = '".$type_val[0]."'
          and type2 = '".$type_val[1]."'
          and type3 = '".$type_val[2]."'
          and type4 = '".$type_val[3]."'
          and wrong_student LIKE '%".$_POST[student_id]."%'
        order by rand()
        limit $_POST[wrong]";
        //echo "</br>".$sql."</br>";

        $i = 0;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
          $print[$i] = $row['image'];
          $print_num[$i++] = $row['no'];
        }


        $sql =
        "SELECT no, image FROM question_image
        WHERE subject = '".$_POST['subject']."'
          and level='".$_POST['difficult']."'
          and (type_index_num = '".$_POST['question_type1']."' or type_index_num = '".$_POST['question_type2']."' or type_index_num = '".$_POST['question_type3']."' or type_index_num = '".$_POST['question_type4']."' )
          and (book_num = '".$_POST['book_name1']."' or book_num = '".$_POST['book_name2']."' or book_num = '".$_POST['book_name3']."' or book_num = '".$_POST['book_name4']."')
          and grade = '".$_POST['grade']."'
          and type1 = '".$type_val[0]."'
          and type2 = '".$type_val[1]."'
          and type3 = '".$type_val[2]."'
          and type4 = '".$type_val[3]."'
          and NOT wrong_student LIKE '%".$_POST[student_id]."%'
        order by rand()
        limit $_POST[num]";
        //echo "</br>".$sql."</br>";

        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
          $print[$i] = $row['image'];
          $print_num[$i++] = $row['no'];
        }


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
      ?>
      <!-- <div class="wrapper" style="display:grid;grid:764px/50% 50%;grid-auto-rows:764px"> -->
      <!-- 중섭이가 764-> 350 으로 수정 12-15 ★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆ -->
      <!-- <div class="wrapper" style="display:grid;grid:350px/50% 50%;grid-auto-rows:764px"> -->
        <?php
        if($_POST['subject'] == 3 && $_POST['question_type1'] != 4)
        {
          echo "<div class='wrapper' style='display:grid;grid:350px/50% 50%;grid-auto-rows:900px'>";
        }else if($_POST['subject'] == 2 || ($_POST['subject'] == 3 && $_POST['question_type1'] == 4)){
          echo "<div class='wrapper' style='display:grid;grid:350px/50% 50%;grid-auto-rows:350px'>";
        }
        else {
          echo "<div class='wrapper' style='display:grid;grid:350px/50% 50%;grid-auto-rows:764px'>";
        }
         ?>



        <div class='box' style='padding:5%;box-sizing:border-box;'>
          <div class='content' style='height:100%'>
            <img src='../ADDING/img/mark.png' style='width:100%'>
          </div>
        </div>
        <!-- 얘만만져라 -->




        <!-- 1122.519685 -->
        <?php
        for($idx = 0; $idx < count($print); $idx++)
        {
          if($_POST['subject'] != 1 || $_POST['subject'] != 3)
          {
            $list .= '|'.$print_num[$idx];
          }
          echo "<div class='box' style='padding:5%;box-sizing:border-box;'><div class='content' style='height:100%'><img src='../ADDING/img/$print[$idx]' style='width:100%'></div></div>";
          for($i = 1; $i < 5; $i++)
          {

            if(strpos($print[$idx], ''.$_POST['grade'].'_'.$_POST["subject"].'_'.$book_num[$i].'_'.$type_index_num[1].'') !== false)
            {
              $A++;
            }else if(strpos($print[$idx], ''.$_POST['grade'].'_'.$_POST["subject"].'_'.$book_num[$i].'_'.$type_index_num[2].'') !== false)
            {
              $B++;
            }else if(strpos($print[$idx], ''.$_POST['grade'].'_'.$_POST["subject"].'_'.$book_num[$i].'_'.$type_index_num[3].'') !== false)
            {
              $C++;
            }else if(strpos($print[$idx], ''.$_POST['grade'].'_'.$_POST["subject"].'_'.$book_num[$i].'_'.$type_index_num[4].'') !== false)
            {
              $D++;
            }

          }
        }
        echo "<div class='box' style='padding:5%;box-sizing:border-box;'><div class='content' style='height:100%'><img src='../ADDING/answer-img/line.PNG' style='width:100%'></div></div>";
        for($idx = 0; $idx < count($print); $idx++)
        {
          echo "<div class='box' style='padding:5%;box-sizing:border-box;'><div class='content' style='height:100%'><img src='../ADDING/answer-img/ANSWER_$print[$idx]' style='width:100%'></div></div>";
        }
        ?>
      </div>
      <?php
      //echo "adf";
      // echo "?";

      $total = $A + $B + $C + $D;

      if($_POST['subject'] == 1)
      {

        $sql = "INSERT INTO print_korean (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql);

        $sql2 = "INSERT INTO correct_korean (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql2);

        $sql3 = "INSERT INTO question_list_korean (title, question_num, teacher_id, student_id, grade, subject, checked)
                VALUES ('".$_POST[paper]."','".$list."', '".$_SESSION[LOG_id]."', '".$_POST[student_id]."',  '".$_POST[grade]."', 1,0)";
        mysqli_query($conn,$sql3);

      }else if($_POST['subject'] == 2)
      {

        $sql = "INSERT INTO print_math (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql);

        $sql2 = "INSERT INTO correct_math (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql2);

        $sql3 = "INSERT INTO question_list (title, question_num, teacher_id, student_id, grade, subject, checked)
                VALUES ('".$_POST[paper]."','".$list."', '".$_SESSION[LOG_id]."', '".$_POST[student_id]."',  '".$_POST[grade]."', 2,0)";
        mysqli_query($conn,$sql3);


      }else if($_POST['subject'] == 3)
      {

        $sql = "INSERT INTO print_eng (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql);

        $sql2 = "INSERT INTO correct_eng (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql2);

        $sql3 = "INSERT INTO question_list_eng (title, question_num, teacher_id, student_id, grade, subject, checked)
                VALUES ('".$_POST[paper]."','".$list."', '".$_SESSION[LOG_id]."', '".$_POST[student_id]."',  '".$_POST[grade]."', 3,0)";
        mysqli_query($conn,$sql3);


      }else if($_POST['subject'] == 4)
      {

        $sql = "INSERT INTO print_social (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql);

        $sql2 = "INSERT INTO correct_social (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql2);

        $sql3 = "INSERT INTO question_list_social (title, question_num, teacher_id, student_id, grade, subject, checked)
                VALUES ('".$_POST[paper]."','".$list."', '".$_SESSION[LOG_id]."', '".$_POST[student_id]."',  '".$_POST[grade]."', 4,0)";
        mysqli_query($conn,$sql3);

      }else if($_POST['subject'] == 5)
      {

        $sql = "INSERT INTO print_science (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql);

        $sql2 = "INSERT INTO correct_science (`".$type_index_name[1][0]."`, `".$type_index_name[2][0]."`, `".$type_index_name[3][0]."`, `".$type_index_name[4][0]."`, total, id)
                VALUES ($A, $B, $C, $D, $total, '".$_POST[student_id]."')";
        mysqli_query($conn,$sql2);

        $sql3 = "INSERT INTO question_list_science (title, question_num, teacher_id, student_id, grade, subject, checked)
                VALUES ('".$_POST[paper]."','".$list."', '".$_SESSION[LOG_id]."', '".$_POST[student_id]."',  '".$_POST[grade]."', 5,0)";
        mysqli_query($conn,$sql3);
      }






      /*print_r($print);
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
      */
     ?>
     <script src="question.js" charset="utf-8"></script>
  </body>
</html>
