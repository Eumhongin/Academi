<?php
session_start();
include("../../module/dbConnect.php");
include("../../module/dbContentsEcho.php");
include("../../module/url_access_denied.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="../js/jquery-min.js" charset="utf-8"></script>

    <title></title>
    <style media="screen">
      td{
        border:1px solid black;
      }
    </style>
  </head>
  <body>
<?php
// $_SESSION['wp_already_chk'] = $_POST['already_chk'];
// $_SESSION['wp_uid'] = $_POST['uid'];
// $_SESSION['wp_num'] = $_POST['num'];
// $_SESSION['wp_wrong_num'] = $_POST['wrong_num'];
// $_SESSION['wp_alphabet'] = $_POST['alphabet'];
function insert_list($title, $question_num, $teacher_id, $student_id)
{
  $sql = "INSERT INTO eng_words_print_list (title, question_num, teacher_id, student_id, subject, checked)
          VALUES ('".$title."', '".$question_num."', '".$teacher_id."', '".$student_id."', 6, 0)";
  mysqli_query($GLOBALS['conn'], $sql);
}
// 푼 문제 포함 and 틀린 문제 포함 x
//print_r($_POST);
if($_POST['checked'] == 1 && $_POST['wrong_num'] == '')
{

  $sql = "SELECT no, word, answer FROM eng_words
  WHERE checked LIKE '%".$_POST[uid]."%'
  and NOT wrong_student LIKE '%".$_POST[uid]."%'
  and word LIKE '".$_POST[alphabet]."%'
  limit $_POST[num]";

  $get[0] = DB_echo($sql, 'no');
  $get[1] = DB_echo($sql, 'word');
  $get[2] = DB_echo($sql, 'answer');
  //print_r($get);
  //echo "1</br>".$sql."</br>".count($get[0]);

  $list = '';
  for($idx = 0; $idx< count($get[0]); $idx++)
  {
    $sql = "UPDATE eng_words SET checked = CONCAT(checked,'|".$_POST[uid]."')
            WHERE no = ".$get[0][$idx]."
            and NOT checked LIKE '%".$_POST[uid]."%'";
    mysqli_query($conn, $sql);
    $list .= '|'.$get[0][$idx];
  }

  insert_list($_POST['printname'], $list, $_SESSION['LOG_id'], $_POST['uid']);



// 푼 문제 초함 and 틀린 문제 포함
}else if($_POST['checked'] == 1 && $_POST['wrong_num'] != ''){


  $sql = "(SELECT no, word, answer FROM eng_words
  WHERE checked LIKE '%".$_POST[uid]."%'
  and NOT wrong_student LIKE '%".$_POST[uid]."%'
  and word LIKE '".$_POST[alphabet]."%'
  limit $_POST[num])
  UNION
  (SELECT no, word, answer FROM eng_words
  WHERE checked LIKE '%".$_POST[uid]."%'
  and wrong_student LIKE '%".$_POST[uid]."%'
  and word LIKE '".$_POST[alphabet]."%'
  limit $_POST[wrong_num] )";

  $get[0] = DB_echo($sql, 'no');
  $get[1] = DB_echo($sql, 'word');
  $get[2] = DB_echo($sql, 'answer');


  //print_r($get);
  //echo "2</br>".$sql."</br>".count($get[0]);

  for($idx = 0; $idx< count($get[0]); $idx++)
  {
    $sql = "UPDATE eng_words SET checked = CONCAT(checked,'|".$_POST[uid]."')
            WHERE no = ".$get[0][$idx]."
            and NOT checked LIKE '%".$_POST[uid]."%'";
    mysqli_query($conn, $sql);
    $list .= '|'.$get[0][$idx];
  }

  insert_list($_POST['printname'], $list, $_SESSION['LOG_id'], $_POST['uid']);




//푼 문제 포함x and 틀린문제 포함x
}else if($_POST['checked'] != 1 && $_POST['wrong_num'] == '')
{

  $sql = "SELECT no,word, answer FROM eng_words
  WHERE NOT checked LIKE '%".$_POST[uid]."%'
  and NOT wrong_student LIKE '%".$_POST[uid]."%'
  and word LIKE '".$_POST[alphabet]."%'
  limit ".$_POST[num]."";

  $get[0] = DB_echo($sql, 'no');
  $get[1] = DB_echo($sql, 'word');
  $get[2] = DB_echo($sql, 'answer');

  for($idx = 0; $idx< count($get[0]); $idx++)
  {
    $sql = "UPDATE eng_words SET checked = CONCAT(checked,'|".$_POST[uid]."') WHERE no = ".$get[0][$idx]."";
    mysqli_query($conn, $sql);
    $list .= '|'.$get[0][$idx];
  }

  insert_list($_POST['printname'], $list, $_SESSION['LOG_id'], $_POST['uid']);
  //print_r($get);
  //echo "3</br>".$sql."</br>".count($get[0]);



//푼 문제 포함 x and 틀린 문제 포함
}else if($_POST['checked'] != 1 && $_POST['wrong_num'] != '')
{

    $sql = "(SELECT no, word, answer FROM eng_words
    WHERE NOT checked LIKE '%".$_POST[uid]."%'
    and NOT wrong_student LIKE '%".$_POST[uid]."%'
    and word LIKE '".$_POST[alphabet]."%'
    limit $_POST[num])
    UNION
    (SELECT no, word, answer FROM eng_words
    WHERE wrong_student LIKE '%".$_POST[uid]."%'
    and word LIKE '".$_POST[alphabet]."%'
    limit $_POST[wrong_num] )";

    $get[0] = DB_echo($sql, 'no');
    $get[1] = DB_echo($sql, 'word');
    $get[2] = DB_echo($sql, 'answer');

    for($idx = 0; $idx< count($get[0]); $idx++)
    {
      $sql = "UPDATE eng_words SET checked = CONCAT(checked,'|".$_POST[uid]."')
              WHERE no = ".$get[0][$idx]."
              and NOT checked LIKE '%".$_POST[uid]."%'";
      mysqli_query($conn, $sql);
      $list .= '|'.$get[0][$idx];
    }

    insert_list($_POST['printname'], $list, $_SESSION['LOG_id'], $_POST['uid']);
    //print_r($get);
    //echo "4</br>".$sql."</br>".count($get[0]);
    // print_r($_SESSION['wp']);

    // print_r($get);
}


$count = ceil(count($get[0]));
// echo "</br>".$count;


//////////////////////이부분. 표 고치기..
echo "<table ><thead>
<td>
문제
</td>
<td>
정답
</td>
<td>
문제
</td>
<td>
정답
</td>
</thead>";
for($idx = 0; $idx < $count; $idx++)
{
  echo "<tbody>
  <td>".$get[1][$idx]."</td><td>".$get[2][$idx]."</td><td>".$get[1][$idx+1]."</td><td>".$get[2][$idx+1]."</td>
  </tr></tbody>";//<td>".$get[1][$idx+3]."</td><td>".$get[1][$idx+4]."</td></tr>";
  $idx++;
}
echo "</table>";



 ?>

</body>
</html>
