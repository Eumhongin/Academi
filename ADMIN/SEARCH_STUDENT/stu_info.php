<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    상세정보<br>
    <?php

    /*if(!isset($_SESSION['LOG_id']))
    {
      echo ("<script>alert('로그인해야 이용가능 합니다.');</script>");
      echo("<script>location.href = '../index.html';</script>");
    }*/

    echo ("이름 : $_SESSION[name]<br/>\n");
    echo ("학교 : $_SESSION[school_name]<br/>\n");
    echo ("학년 : $_SESSION[grade]<br/>\n");
     ?>
    -----------------히스토리....<br>
    <?php     // 파일에 데이터를 써내려가는건 http://araikuma.tistory.com/164 에서 참고 할것
    //readfile("stu_history/$_SESSION[name].txt");
    $lines = @file("stu_history/$_SESSION[name].txt") or $result = "파일을 못 읽음.";
    if($lines != null)
    {
      $result = '<table border ="1">';  // ★★★★★CSS입혀서 이쁘게 뽑을 수 있는지 해볼것,
      $result .= "<tr><th>NAME</th><th>BOOK_NAME</th><th>TYPE_MATE</th><th>TYPE_INDEX</th><th>PAGE</th><th>NUMBER</th></tr>";
      for($i = 0; $i < count($lines); $i++)
      {
        $result .= "<tr>";
        $arr = explode(",", $lines[$i]);
        for($j = 0; $j<6; $j++)
        {
          $result .= "<td>{$arr[$j]}</td>";
        }
        $result .= "</tr>";
      }
      $result .= "</table>";
    }

    echo $result;
     ?>

    -----------------학생분석<br>

    <?php
      
     ?>

  </body>
</html>
