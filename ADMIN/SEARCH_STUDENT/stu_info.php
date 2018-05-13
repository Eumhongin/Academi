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

    echo ("이름 : $_SESSION[name]<br/>\n");
    echo ("학교 : $_SESSION[school_name]<br/>\n");
    echo ("학년 : $_SESSION[grade]<br/>\n");
     ?>
    히스토리<br>
    학생분석<br>
  </body>
</html>
