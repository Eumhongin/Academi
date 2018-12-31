<?php
session_start();

include("../../../module/dbConnect.php");
include("../../../module/dbContentsEcho.php");
$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'y', 'x', 'z'];
$subject;
function switch_subject($subject){
  switch ($subject) {
    case 1:
        $GLOBALS['subject'] = 'korean';
      break;

    case 2:
        $GLOBALS['subject'] = 'math';
      break;

    case 3:
        $GLOBALS['subject'] = 'eng';
      break;

    case 4:
        $GLOBALS['subject'] = 'social';
      break;

    case 5:
        $GLOBALS['subject'] = 'science';
      break;

    case 6:
        $GLOBALS['subject'] = '영어단어';
      break;
  }
}

switch_subject($_SESSION['subject']);




  if($_POST['check'] == 0)
  {
    if($subject != '영어단어')
    {
      $sql="SELECT type_index_name FROM question_type_".$subject."_index WHERE hide=1";
      $get = DB_echo($sql, 'type_index_name');
      echo json_encode($get);

    }else if($subject == '영어단어')
    {
      echo json_encode($alphabet);
    }

  }else if($_POST['check'] == 1)
  {
    if($subject != '영어단어')
    {
      $sql="SELECT type_index_name FROM question_type_".$subject."_index WHERE hide=1";
      $get = DB_echo($sql, 'type_index_name');

      $sql = "SELECT * FROM correct_".$subject." WHERE id = '".$_SESSION[stu_id][0]."' ";

      for($idx = 0; $idx < count($get); $idx++)
      {
        $correct[$idx] = DB_echo($sql, $get[$idx]);
      }



      $sql = "SELECT * FROM print_".$subject." WHERE id = '".$_SESSION[stu_id][0]."' ";

      for($idx = 0; $idx < count($get); $idx++)
      {
        $print[$idx] = DB_echo($sql, $get[$idx]);
      }


      $a = count($get) + 1;
      $b = count($correct[0]) + 1;

      for($idx = 0; $idx < count($get); $idx++)
      {
        for($idx2 = 0; $idx2 < count($correct[0]); $idx2++)
        {
          $correct[$idx][$b] += $correct[$idx][$idx2];
          $print[$idx][$b] += $print[$idx][$idx2];
          // echo $print[$idx][$b];
        }
      }


      for($idx3 =0; $idx3 < count($get); $idx3++)
      {
        $total[$idx3] = ($correct[$idx3][$b] / $print[$idx3][$b]) * 100;
        if(is_nan($total[$idx3]))
        {
          $total[$idx3] = 0;
        }else{
          $total[$idx3]= round($total[$idx3],2);
        }
        // echo $correct[$idx3][$b]."<====>".$print[$idx3][$b]."</br>".$total[$idx3]."</br>==========</br>";
      }
      // $total = $_SESSION['stu_id'];
      // print_r($total);

          echo json_encode($total);

    }else if($subject == '영어단어')
    {
      for($idx = 0 ; $idx < count($alphabet); $idx++)
      {
        $sql = "SELECT word FROM eng_words WHERE word LIKE '".$alphabet[$idx]."%' and checked LIKE '%".$_SESSION[stu_id][0]."%'";
        $word[$idx] = DB_echo($sql, 'word');
        $word_count[$idx] = count($word[$idx]);
      }

      for($idx = 0 ; $idx < count($alphabet); $idx++)
      {
        $sql = "SELECT word FROM eng_words WHERE word LIKE '".$alphabet[$idx]."%' and checked LIKE '%".$_SESSION[stu_id][0]."%' and NOT wrong_student LIKE '%".$_SESSION[stu_id][0]."%'";
        $check[$idx] = DB_echo($sql, 'word');
        $check_count[$idx] = count($check[$idx]);
      }

      for($idx = 0 ; $idx < count($alphabet); $idx++)
      {
        $total[$idx] = ($check_count[$idx] / $word_count[$idx]) * 100;
        if(is_nan($total[$idx]))
        {
          $total[$idx] = 0;
        }else{
          $total[$idx]= round($total[$idx],2);
        }
      }

        echo json_encode($total);





    }

  }

 ?>
