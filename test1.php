
<?php session_start(); ?>

<?php include('module/rand_string.php');
include('module/dbConnect.php');
include('module/dbContentsEcho.php');
include("module\\EVENTdbConnect.php"); ?>


    <?php
    $sql="SELECT type_index_name FROM question_type_math_index WHERE hide=1";
    $get = DB_echo($sql, 'type_index_name');


    $sql = "SELECT * FROM correct_math WHERE  id = '".$_SESSION[stu_id][0]."' ";

    for($idx = 0; $idx < count($get); $idx++)
    {
      $correct[$idx] = DB_echo($sql, $get[$idx]);
    }



    $sql = "SELECT * FROM print_math WHERE  id = '".$_SESSION[stu_id][0]."' ";

    for($idx = 0; $idx < count($get); $idx++)
    {
      $print[$idx] = DB_echo($sql, $get[$idx]);
    }

    $a = count($get) + 1;
    $b = count($correct[0]) + 1;
echo "</br>".$b."</br>";
    for($idx = 0; $idx < count($get); $idx++)
    {
      for($idx2 = 0; $idx2 < count($correct[0]); $idx2++)
      {
        $correct[$idx][$b] += $correct[$idx][$idx2];
        $print[$idx][$b] += $print[$idx][$idx2];
        // $total[$idx][$idx2] = ($correct[$idx][$idx2] / $print[$idx][$idx2]) * 100;
        // echo $total[$idx][$idx2]."</br>";
      }
      // echo "=======================</br>";
    }

    // print_r($total);
    // echo $a."</br>".$b;

    for($q =0; $q < count($get); $q++)
    {
      $total[$q]= ($correct[$q][$b] / $print[$q][$b]) * 100;
      // echo $correct[$q][$b]."<====>".$print[$q][$b]."</br>".$total[$q]."</br>==========</br>";
    }

    // echo $_SESSION['stu_id'][0];
    print_r($total);
    // echo json_encode($_SESSION['stu_id'][0]);
     ?>
