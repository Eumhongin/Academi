<!DOCTYPE html>
<?php
  include("..\module\dbConnect.php");
  include("..\module\dbContentsEcho.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>


  </head>
  <body>
    <?php

      $sql = "SELECT * FROM question_type_math_index WHERE hide=1";

      $math = DB_echo($sql, 'type_index_name');
      $math_num = DB_echo($sql, 'type_index_num');

      $idx = 0;


     ?>
     <strong>삭제</strong>
     <select class="" id="delete_type">
       <option value="999">=== 유형 ===</option>
       <?php
           while($math[$idx] != null)
           {
             echo "<option value='".$math_num[$idx]."'>".$math[$idx++]."</option>";
           }
           $idx = 0;
        ?>
     </select>
     <button type="button" id="delete_button">삭제</button>

     <hr>
     <strong>추가</strong>
     <input type="text" id="insert_type" >
     <button type="button" id="insert_button">추가</button>

     <hr>
     <strong>변경</strong>
     <select class="" id="update_type">
       <option value="999">=== 유형 ===</option>
       <?php
           while($math[$idx] != null)
           {
             echo "<option value='".$math_num[$idx]."'>".$math[$idx++]."</option>";
           }
           $idx = 0;
        ?>
     </select> 을(를)
     <input type="text" id="change_type" > 으로
     <button type="button" id="update_button">변경</button>



    <script src="test.js" charset="utf-8"></script>
  </body>
</html>
