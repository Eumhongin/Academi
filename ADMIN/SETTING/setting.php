<!DOCTYPE html>
<?php
  session_start();
  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <style media="screen">
      html,body{
        padding: 0;
        margin:0;
        height:100%;
        background-color: #eee;
      }
      .SET_Header{
        background-color: rgb(230, 174, 6);
        box-shadow:0 0 10px #626262;

        height: 5%;
      }
      .container{
        margin:0 auto;
        width: 40%;
      }
      .SET_Section{
        height: 90%;
      }
      .SET_Section > li{
        list-style: none;

        height: 20%;

      }
      li{
        background-color: #ccc;
        box-shadow: 1px 1px 5px #626262;
        height: 30%;
      }
      p{
        margin:4px;
        margin-top:2%;
      }
    </style>
  </head>
  <body>
    <div class="SET_Header">

    </div>
    <div class="SET_Section container">
      <p>교사정보</p>
      <li><button onclick="location.href = 'INFO_TEACHER/tea_info_change.php'">교사 정보</button></li>
      <p>배경수정</p>
      <li> <form name = "form" action="BG_setting.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <input class="Background_Setting" type="file" name="upload" id="selectedFile">
        <button class="picedit" type="submit">변경된 정보 저장하기</button>
      </form>
      </li>
      <p>유형및 책 수정</p>
      <li><div class="modify">

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
      </div></li>


        <?php
        if($_SESSION['LOG_id'] == 'quhb2455')
        {
          echo "<li><p>토큰생성</p><button type='button' id='token' name='button'>토큰생성</button></li>";
        }
        ?>




    </div>

    <!-- <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">사진추가하기</button> -->
    <script src="test.js" charset="utf-8"></script>
    <script src="tokenSET.js" charset="utf-8"></script>
  </body>
</html>
