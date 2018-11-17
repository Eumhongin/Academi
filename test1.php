<!DOCTYPE html>

<?php session_start(); ?>

<?php include('module/rand_string.php');
include('module/dbConnect.php');
include('module/dbContentsEcho.php');
include("module\\EVENTdbConnect.php"); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $book_name = DB_echo("SELECT book_name FROM question_book_name","book_name");
    $book_num = DB_echo("SELECT book_num FROM question_book_name","book_num");

    //문제 유형
    //수 1, 수 2 이런식으로도 선택할 수 있게 해야함

    //문제 세부 유형
    $type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE hide=1", "type_index_name");
    $type_index_num = DB_echo("SELECT type_index_num FROM question_type_math_index WHERE hide=1", "type_index_num");

    $print = DB_echo("SELECT image FROM question_image",'image');
    echo"</br>";echo"</br>";
    print_r($book_num);
    echo"</br>";echo"</br>";
    print_r($type_index_num);
echo"</br>";echo $book_num[2]."</br>";
    print_r($print);
    $A = 0;
    $B = 0;
    $C = 0;
    $D = 0;

    for($idx = 0; $idx < count($print); $idx++)
    {

      // if(strpos($print[$idx], '1_2_3_5_') !== false)
      // {
      //   $A++;
      // }
      if(strpos($print[$idx], '1_2_'.$book_num[2].'_'.$type_index_num[0].'') !== false)
      {
        $A++;
      }
      else if(strpos($print[$idx], '1_2_'.$book_num[2].'_'.$type_index_num[2].'') !== false)
      {
        $B++;
      }else if(strpos($print[$idx], '1_2_'.$book_num[2].'_'.$type_index_num[4].'') !== false)
      {
        $C++;
      }else if(strpos($print[$idx], '1_2_'.$book_num[3].'_'.$type_index_num[2].'') !== false)
      {
        $D++;
      }
    }

    echo "</br></br>A : ".$A."</br>";
    echo "B : ".$B."</br>";
    echo "C : ".$C."</br>";
    echo "D : ".$D."</br>";

    $str = 6;
    $abc =123;
    $z = $str.$abc;
echo $z."</br>";
    $z = $z+10;
    echo $z;


     ?>

  </body>
</html>
