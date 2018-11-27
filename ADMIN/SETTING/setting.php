<!DOCTYPE html>
<?php
  session_start();
  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");
  include("..\..\module\url_access_denied.php");
  
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../fonts/font.css">
    <style media="screen">
      html,body{
        padding: 0;
        margin:0;
        height:100%;

      }
      .SET_Header{
        background-color: rgb(6, 142, 230);
        box-shadow: 0 3px 8px rgb(55, 55, 55);

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
        background: white;
        box-shadow: 1px 1px 5px #626262;
        height: 30%;
        padding:1%;
      }
      p{
        margin:4px;
        margin-top:2%;
        font-size: 1vw;
        font-family: 'bs3';
      }
      button{
        height: 25px;
        border:none;
        background-color: rgb(9, 95, 175);
        color: white;
        font-family: 'bs2';
        font-size: 20px;
        box-shadow: 0 2px 3px rgb(101, 101, 101);
      }
      .container{

        padding:2%;
        border-top: none;
        border-bottom: none;
        background-color: rgb(244, 244, 244);
        box-shadow: 0 4px 8px rgb(55, 55, 55);
      }
      input{
        height: 24px;
      }
      select{
        height: 30px;
      }
    </style>
  </head>
  <body>
    <div class="SET_Header">

    </div>
    <div class="SET_Section container">
      <p>교사정보</p>
      <hr>
      <li><button onclick="location.href = 'INFO_TEACHER/tea_info_change.php'">교사 정보</button></li>
      <p>배경수정</p>
      <hr>
      <li> <form name = "form" action="BG_setting.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <input class="Background_Setting" type="file" name="upload" id="selectedFile">
        <button class="picedit" type="submit">변경된 정보 저장하기</button>
      </form>
      </li>
      <p>유형 및 책 수정</p>
      <hr>
      <li>
        <div class="modify">

        <?php

        $sql = "SELECT * FROM question_type_math_index WHERE hide=1";

        $math = DB_echo($sql, 'type_index_name');
        $math_num = DB_echo($sql, 'type_index_num');



        $sql = "SELECT * FROM question_book_name WHERE hide=1";

        $book = DB_echo($sql, 'book_name');
        $book_num = DB_echo($sql, 'book_num');


        $idx = 0;


        ?>
        <strong>== 유형 ==</strong>
        <br><br>
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

        <br><br>
        <strong>추가</strong>
        <input type="text" id="insert_type" >
        <button type="button" id="insert_button">추가</button>

        <br><br>
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
      <li style="margin-top:10px;">
        <div class="modify">
          <strong>== 책 ==</strong>
          <br><br>
          <strong>삭제</strong>
          <select class="" id="book_delete_type">
            <option value="999">=== 유형 ===</option>
            <?php
            while($math[$idx] != null)
            {
              echo "<option value='".$book_num[$idx]."'>".$book[$idx++]."</option>";
            }
            $idx = 0;
            ?>
          </select>
          <button type="button" id="book_delete_button">삭제</button>

          <br><br>
          <strong>추가</strong>
          <input type="text" id="book_insert_type" >
          <button type="button" id="book_insert_button">추가</button>

          <br><br>
          <strong>변경</strong>
          <select class="" id="book_update_type">
            <option value="999">=== 유형 ===</option>
            <?php
            while($math[$idx] != null)
            {
              echo "<option value='".$book_num[$idx]."'>".$book[$idx++]."</option>";
            }
            $idx = 0;
            ?>
          </select> 을(를)
          <input type="text" id="book_change_type" > 으로
          <button type="button" id="book_update_button">변경</button>

        </div>
      </li>
      <li>
        <div class="jungsup">

        </div>
      </li>



        <?php
        if($_SESSION['LOG_id'] == 'quhb2455')
        {
          echo "<p>토큰생성</p><hr><li><p>토큰생성</p><button type='button' id='token' name='button'>토큰생성</button></li>";
        }
        ?>




    </div>

    <!-- <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">사진추가하기</button> -->
    <script src="test.js" charset="utf-8"></script>
    <script src="tokenSET.js" charset="utf-8"></script>
  </body>
</html>
