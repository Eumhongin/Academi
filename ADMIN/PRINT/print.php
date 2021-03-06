<?php
  // session_start();
  include("../../module/dbConnect.php");
  include("../../module/dbContentsEcho.php");
  include("../../module/url_access_denied.php");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>문제출력하기</title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/print.css">

    <script type="text/javascript">
    $(document).ready(function(){


    });

    </script>

  </head>
  <body>
    <img class="gohome" src="../img/home-ios-icon.png" alt="go-index" onclick="location.href='../../intro/Temp.html'">
    <div class="v-line">

    </div>
    <!-- <span class="Preview">미리보기</span> -->
    <span class="Subtitle_ADD">문제출력</span>
    <section class="row">
      <div class="ADD_LEFT">
        <div class="ALPanel_Regular">
          <span class="ALPR_span">문제출력</span>
        </div>
        <div class="ALPanel_UnRegular">
          <span class="ALPUR_span">단어출력</span>
        </div>

        <form  class="ADD_LEFT_FORM" name = "form" action="question_print.php" method="post" enctype="multipart/form-data">
            <div class="ALF_Shield">
              <div class="ALFS_PrintObjectName">
                <input type="text" name="paper" value="" placeholder="문제지 이름">
              </div>

              <div class="ALFS_UID">
                <!-- 학생아이디 넣을 수 있도록 -->
                <input type="text" name="student_id" value="" placeholder="학생 아이디">
              </div>
              <br>
              <div class="ALFS_Paging_Number row">
                <div class="ALFSPN_Number">
                  <!-- 불필요 -->
                  <input type="text" name="num" value="" placeholder="총 문제 개수" required>
                </div>
                <div class="ALFSPN_Page">
                  <!-- 불필요 -->
                  <input type="text" name="wrong" value="" placeholder="총 문제 개수 중 틀린 문제 개수" >
                </div>
              </div>
              <br>
              <div class="ALFS_Option row">
                <?php
                  // 문제지 이름
                  $book_name = DB_echo("SELECT book_name FROM question_book_name WHERE hide=1","book_name");
                  $book_num = DB_echo("SELECT book_num FROM question_book_name WHERE hide=1","book_num");

                  //문제 유형
                  //수 1, 수 2 이런식으로도 선택할 수 있게 해야함

                  //문제 세부 유형
                  $type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE hide=1", "type_index_name");
                  $type_index_num = DB_echo("SELECT type_index_num FROM question_type_math_index WHERE hide=1", "type_index_num");
                ?>
                <select class="ALFSO_Subject" id="ALFSO_Subject_id" name="subject" required>
                  <option value="" selected>과목</option>
                  <option value="1" >국어</option>
                  <option value="2" >수학</option>
                  <option value="3" >영어</option>
                  <option value="4" >사회</option>
                  <option value="5" >과학</option>

                </select>
                <select class="ALFSO_Grade" name="grade" required>
                  <option value="" selected>학년</option>
                  <option value="1" >1</option>
                  <option value="2" >2</option>
                  <option value="3" >3</option>
                </select>
                <div class="sub" style="width:10%;border:none">
                  &nbsp;
                </div>

                <select class="ALFSO_Bookname" name="book_name1" required>
                  <option value="" selected>책이름</option>
                  <?php
                    // for($idx = 1; $idx <= count($book_name); $idx++)
                    // {
                    //   echo "<option value='".$book_num[$idx-1]."'>".$book_name[$idx-1]."</option>";
                    // }
                  ?>
                  <!-- <option value="0" >1</option>
                  <option value="0" >2</option>
                  <option value="0" >3</option>
                  <option value="0" >4</option>
                  <option value="0" >5</option> -->
                </select>
                <select class="ALFSO_type" name="question_type1" required>
                  <option value="" selected>유형</option>
                  <?php
                    // for($idx = 0; $idx < count($type_index_name); $idx++)
                    // {
                    //   echo "<option value='".$type_index_num[$idx]."'>".$type_index_name[$idx]."</option>";
                    // }
                  ?>
                  <!-- <option value="0" >1</option>
                  <option value="0" >2</option>
                  <option value="0" >3</option>
                  <option value="0" >4</option>
                  <option value="0" >5</option> -->
                </select>

                <div class="sub" style="width:10%;border:none">
                  사용하기
                </div>


                <!-- <select id="lineB2" class="ALFSO_Bookname" name="book_name2" required disabled> -->

                <select id="lineB2" class="ALFSO_Bookname" name="book_name2" required disabled >

                  <option value="" selected>책이름</option>
                  <?php
                    // for($idx = 1; $idx <= count($book_name); $idx++)
                    // {
                    //   echo "<option value='".$book_num[$idx-1]."'>".$book_name[$idx-1]."</option>";
                    // }
                  ?>
                  <!-- <option value="0" >1</option>
                  <option value="0" >2</option>
                  <option value="0" >3</option>
                  <option value="0" >4</option>
                  <option value="0" >5</option> -->
                </select>


                <select id="lineT2" class="ALFSO_type" name="question_type2" required disabled>
                  <option value="" selected>유형</option>
                  <?php
                    // for($idx = 0; $idx < count($type_index_name); $idx++)
                    // {
                    //   echo "<option value='".$type_index_num[$idx]."'>".$type_index_name[$idx]."</option>";
                    // }
                  ?>
                </select>


                <div class="sub" style="width:10%;">
                  <input type="checkbox" name="check1" value="2">
                </div>
                <select id="lineB3" class="ALFSO_Bookname" name="book_name3" required disabled>
                  <option value="" selected>책이름</option>
                  <?php
                  for($idx = 1; $idx <= count($book_name); $idx++)
                  {
                    echo "<option value='".$book_num[$idx-1]."'>".$book_name[$idx-1]."</option>";
                  }
                  ?>
                </select>

                <select id="lineT3" class="ALFSO_type" name="question_type3" required disabled>
                  <option value="" selected>유형</option>
                  <?php
                  for($idx = 0; $idx < count($type_index_name); $idx++)
                  {
                    echo "<option value='".$type_index_num[$idx]."'>".$type_index_name[$idx]."</option>";
                  }
                  ?>
                </select>



                <div class="sub" style="width:10%;">
                  <input type="checkbox" name="check2" value="3">
                </div>
                <select id="lineB4" class="ALFSO_Bookname" name="book_name4" required style="margin-bottom:10%;" disabled>
                  <option value="" selected>책이름</option>
                  <?php
                  for($idx = 1; $idx <= count($book_name); $idx++)
                  {
                    echo "<option value='".$book_num[$idx-1]."'>".$book_name[$idx-1]."</option>";
                  }
                  ?>
                </select>




                <select id="lineT4" class="ALFSO_type" name="question_type4" required style="margin-bottom:10%;" disabled>
                  <option value="" selected>유형</option>
                  <?php
                  for($idx = 0; $idx < count($type_index_name); $idx++)
                  {
                    echo "<option value='".$type_index_num[$idx]."'>".$type_index_name[$idx]."</option>";
                  }
                  ?>
                </select>

                <div class="sub" style="width:10%;">
                  <input type="checkbox" name="check3" value="4">
                </div>
              </div>

              <div class="ALFS_Difficult">
                <input type="text" name="difficult" value="" placeholder="난이도 [0 - 10]" required>
              </div>
              <br>
              <div class="ALFS_CheckBox row">
                <!-- 최소 1개 이상 선택하도록 해야함. -->
                <li><input type="checkbox" name="type[]" value="0"><span>사고력</span></li>
                <li><input type="checkbox" name="type[]" value="1"><span>이해력</span></li>
                <li><input type="checkbox" name="type[]" value="2"><span>문제해결력</span></li>
                <li><input type="checkbox" name="type[]" value="3"><span>창의력</span></li>
              </div>
              <br>





            <button class="ALFS_Submit" type="submit">추가</button>
          </div>
        </form>

        <!-- <div class="ADD_LEFT_FORM2 hide"> -->
          <form class="ADD_LEFT_FORM2 hide" action="word_print.php" method="post">

            <div class="ALF_Shield">
              <div class="ALFS_PrintObjectName">
                <input type="text" class = "printname" name="printname" value="" placeholder="문제지 이름">
              </div>

              <div class="ALFS_UID">
                <input type="text" class = "uid" name="uid" value="" placeholder="학생 아이디">
              </div>
              <br>
              <div class="ALFS_Paging_Number row">
                <div class="ALFSPN_Page">
                  <input type="text" class = "num"name="num" value="" placeholder="문제 개수" required>
                </div>
                <div class="ALFSPN_Number">
                  <input type="text" class = "wrong_num"name="wrong_num" value="" placeholder="틀린단어 포함 개수" >
                </div>
              </div>
              <br>

              <br>
              <div class="ALFS_Option row">
                <select class="ALFSO_alphabet" name="alphabet" required>
                  <option value="" selected>=시작 알파벳=</option>
                  <option value="a" >a</option><option value="b" >b</option><option value="c" >c</option><option value="d" >d</option><option value="e" >e</option>
                  <option value="f" >f</option><option value="g" >g</option><option value="h" >h</option><option value="i" >i</option><option value="j" >j</option>
                  <option value="k" >k</option><option value="l" >l</option><option value="m" >m</option><option value="n" >n</option><option value="o" >o</option>
                  <option value="p" >p</option><option value="q" >q</option><option value="r" >r</option><option value="s" >s</option><option value="t" >t</option>
                  <option value="u" >u</option><option value="v" >v</option><option value="w" >w</option><option value="x" >x</option><option value="y" >y</option>
                  <option value="z" >z</option>
                </select>
            </div>
              <div class="ALFS_CheckBox row">
                <li><input type="checkbox" name="checked" value="1"><span>푼 문제 출력 여부</span></li>
              </div>
              <br>
            <button class="ALFS_word_Submit" type="submit">추가</button>
            </form>
          </div>

        <!-- </div> -->


        <br><br>


      </div>
      <div class="ADD_RIGHT">

      </div>
    </section>




    <!-- <script type="text/javascript">
      function getSelectValue(frm) // 즐겨찾기에 추가해놈 , 웹마당
      {
        frm.textValue.value = frm.book_name.options[frm.book_name.selectedIndex].text;
        frm.optionValue.value = frm.book_name.options[frm.book_name.selectedIndex].value;
      }

    </script> -->
    <script src="../js/add.js" charset="utf-8"></script>
    <script src="../js/print.js" charset="utf-8"></script>
  </body>
</html>
