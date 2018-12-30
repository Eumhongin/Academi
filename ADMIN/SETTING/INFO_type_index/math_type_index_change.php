<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("..\..\..\module\dbConnect.php");
      include("..\..\..\module\dbContentsEcho.php");

      $sql = "SELECT * FROM question_type_math_index";

      $math = DB_echo($sql, 'type_index_name');
      $idx = 0;


     ?>
     <select class="" name="type">
       <option value="">=== 유형 ===</option>
       <?php
           while($math[$idx] != null)
           {
             echo "<option value=''>".$math[$idx++]."</option>";
           }
        ?>
     </select>
  </body>
</html>
