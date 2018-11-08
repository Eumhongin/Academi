<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      if(confirm('진행함?'))
      {
        alert('ㅇㅇ');
      }
    </script>
  </head>
  <body>
    <?php
    include("module\dbConnect.php");
    include("module\dbContentsEcho.php");
    include("module\EVENTdbConnect.php");

    $get_num = "SELECT * FROM member WHERE stu_tea = 0";
    $a = DB_echo($get_num, 'school_name');
    $b = DB_echo($get_num, 'id');
    $i = 0;

    print_r($a);
    echo "</br>";
    print_r($b);
     ?>

  </body>
</html>
