<!DOCTYPE html>
<?php
// include("..\..\module\url_access_denied.php");
include("..\..\module\dbConnect.php");
include("..\..\module\dbContentsEcho.php");

$book_name = DB_echo("SELECT book_name FROM question_book_name","book_name");
$book_num = DB_echo("SELECT book_num FROM question_book_name","book_num");

$type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE hide=1", "type_index_name");
$type_index_num = DB_echo("SELECT type_index_num FROM question_type_math_index WHERE hide=1", "type_index_num");

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>문제추가하기</title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/modify.css">

    <script type="text/javascript">
    $(document).ready(function(){


    });

    </script>

  </head>
  <body>
    <img class="gohome" src="../img/home-ios-icon.png" alt="go-index" onclick="location.href='../../intro/Temp.html'">
    <div class="v-line">

    </div>
    <span class="Detail">상세검색</span>
    <span class="Subtitle_MODIFY">문제수정</span>
    <section class="row">
      <div class="MODIFY_LEFT">
        <span class="MLL_History">히스토리</span>
        <form  class="MODIFY_LEFT_FORM" name = "form" action="question_add.php" method="post" enctype="multipart/form-data">


          <div class="ML_History">
            <table id="history" class="col-1">
              <thead class="col-1">
                <tr class="col-1">
                  <th class="col-4">추가날짜</th>
                  <th class="col-2">파일</th>
                  <th class="col-4">최근수정일자</th>
                </tr>
              </thead>
              <!-- <tbody class="col-1">
                <tr class="col-1">
                  <td class="col-4">hongo</td>
                  <td class="col-2">gg</td>
                  <td class="col-4">wdw</td>
                </tr>
              </tbody> -->


            </table>
          </div>
        </form>
      </div>
      <div class="MODIFY_RIGHT">
        <form class="MR_option" action="" method="post">
          <select class="MRO_Subject col-5" id ="subject" name="subject" required>
            <option value="" selected>과목</option>
            <option value="수학" >수학</option>

          </select>
          <select class="MRO_Grade col-5" id ="grade" name="grade" required>
            <option value="" selected>학년</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
          </select>
          <select class="MRO_Bookname col-5" id="book_name" name="book_name" required>
            <option value="" selected>책이름</option>
            <?php
              for($idx = 1; $idx <= count($book_name); $idx++)
              {
                echo "<option value='".$book_num[$idx-1]."'>".$book_name[$idx-1]."</option>";
              }
            ?>

          </select>
          <select class="MRO_type col-5" id ="question_type" name="question_type" required>
            <option value="" selected>유형</option>
            <?php
              for($idx = 1; $idx <= count($type_index_name); $idx++)
              {
                echo "<option value='".$type_index_num[$idx-1]."'>".$type_index_name[$idx-1]."</option>";
              }
            ?>

          </select>

          <button class="MRO_Submit" id="search" type="button">검색</button>
        </form>


      </div>
    </section>




    <!-- <script type="text/javascript">
      function getSelectValue(frm) // 즐겨찾기에 추가해놈 , 웹마당
      {
        frm.textValue.value = frm.book_name.options[frm.book_name.selectedIndex].text;
        frm.optionValue.value = frm.book_name.options[frm.book_name.selectedIndex].value;
      }

    </script> -->
    <script src="../js/modify.js" charset="utf-8"></script>
  </body>
</html>
