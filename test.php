<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");
    include("module\dbContentsEcho.php");

    $book_name = DB_echo("SELECT book_name FROM question_book_name","book_name");
    $book_num = DB_echo("SELECT book_num FROM question_book_name","book_num");

    //문제 유형
    //수 1, 수 2 이런식으로도 선택할 수 있게 해야함

    //문제 세부 유형
    $type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index", "type_index_name");
    $type_index_num = DB_echo("SELECT type_index_num FROM question_type_math_index", "type_index_num");

    print_r($book_num);
    echo "</br>";
    print_r($book_name);
    echo "</br>";
    print_r($type_index_num);
    echo "</br>";
    print_r($type_index_name);
    ?>

  </body>
</html>
