<!DOCTYPE html>
<?php
include("..\..\module\url_access_denied.php");
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>문제추가하기</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/search.css">
    
  </head>
  <body>
    <img class="gohome" src="../img/home-ios-icon.png" alt="go-index" onclick="location.href='../../intro/Temp.html'">
    <div class="v-line">

    </div>

    <span class="Subtitle_search">학생조회</span>
    <section class="row">
      <div class="search_left">
        <form  class="sl_form" name = "form" action="stu_check.php" method="post" enctype="multipart/form-data">
          <div class="sf_shield">
            <div class="sfs_input">
              <input type="text" name="" value="" placeholder="뭐들어가지" required>
            </div>
            <div class="sfs_input">
              <input type="text" name="name" value="" placeholder="이름" required>
            </div>
            <div class="sfs_input">
              <input type="text" name="school_name" value="" placeholder="학교" required>
            </div>
            <div class="sfs_input">
              <input type="text" name="grade" value="" placeholder="학년" required>
            </div>
            <select class="sfs_select" name="">
              <option value="">과목을선택하세요</option>
              <option value="">수학</option>
            </select>

            <button class="sfs_subtmit" type="submit">찾기</button>

          </div>
        </form>
      </div>
      <div class="search_right">

      </div>
    </section>




    <!-- <script type="text/javascript">
      function getSelectValue(frm) // 즐겨찾기에 추가해놈 , 웹마당
      {
        frm.textValue.value = frm.book_name.options[frm.book_name.selectedIndex].text;
        frm.optionValue.value = frm.book_name.options[frm.book_name.selectedIndex].value;
      }

    </script> -->
    <script src="../js/search.js" charset="utf-8"></script>
  </body>
</html>







    <!-- 학생 조회
    <button onclick="location.href = '../../index.html'">로고</button>

    <form action="stu_check.php" method="post">

      이름 : <input type="text" name="name">
      학교 이름 : <input type="text" name="school_name">
      학년 : <input type="text" name="grade">
      <button type = "submit" />검새꾸</button>

    </form> -->
