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
    <title>국-영 문제추가하기</title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/add.css">
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
    <span class="Preview">미리보기</span>
    <span class="Subtitle_ADD">국어-영어 지문추가</span>
    <section class="row">
      <div class="ADD_LEFT">
        <div class="ALPanel_Regular">
          <span class="ALPR_span">정규문제</span>
        </div>


        <form  class="ADD_LEFT_FORM" name = "form" action="stage_direction_adding.php" method="post" enctype="multipart/form-data">
            <div class="ALF_Shield">
              <div class="ALFS_File_Shield row">
                <span class="ALFSFS_FilePath" > 1 - 지문 </span>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="upload" id="selectedFile" style="display: none;" />
                <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">찾기</button>

                <span class="ALFSFS_FilePath2" > 2 - 지문 </span>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="upload2" id="selectedFile2" style="display: none;"  />
                <button class='picedit2' type="button" name="button" onclick="document.getElementById('selectedFile2').click();">찾기</button>

                <span class="ALFSFS_FilePath3" > 3 - 지문 </span>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="upload3" id="selectedFile3" style="display: none;"  />
                <button class='picedit3' type="button" name="button" onclick="document.getElementById('selectedFile3').click();">찾기</button>

                <span class="ALFSFS_FilePath4" > 4 - 지문 </span>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="upload4" id="selectedFile4" style="display: none;"  />
                <button class='picedit4' type="button" name="button" onclick="document.getElementById('selectedFile4').click();">찾기</button>

            </div>
              <br>
              <div class="ALFS_Paging_Number row">
                <div class="ALFSPN_Page">
                  <!-- <input type="text" name="page" value="" placeholder="쪽수" required> -->
                </div>
                <div class="ALFSPN_Number">
                  <!-- <input type="text" name="num" value="" placeholder="문제 번호" readonly> -->
                </div>
              </div>
              <br>
              <div class="ALFS_Option row">
                <?php
                  // 문제지 이름
                  $book_name = DB_echo("SELECT book_name FROM question_book_name","book_name");
                  $book_num = DB_echo("SELECT book_num FROM question_book_name","book_num");

                  //문제 유형
                  //수 1, 수 2 이런식으로도 선택할 수 있게 해야함

                  //문제 세부 유형
                  $type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index WHERE hide=1", "type_index_name");
                  $type_index_num = DB_echo("SELECT type_index_num FROM question_type_math_index WHERE hide=1", "type_index_num");

                  $type_social_index_name = DB_echo("SELECT type_index_name FROM question_type_social_index WHERE hide=1", "type_index_name");
                  $type_social_index_num = DB_echo("SELECT type_index_num FROM question_type_social_index WHERE hide=1", "type_index_num");

                  $type_science_index_name = DB_echo("SELECT type_index_name FROM question_type_science_index WHERE hide=1", "type_index_name");
                  $type_science_index_num = DB_echo("SELECT type_index_num FROM question_type_science_index WHERE hide=1", "type_index_num");

                ?>
                <select class="ALFSO_Subject" id="subject" name="subject" required>
                  <option value="" selected>과목</option>
                  <option value="1" >국어</option>
                  <!-- <option value="2" >수학</option> -->
                  <option value="3" >영어</option>
                  <!-- <option value="4" >사회</option> -->
                  <!-- <option value="5" >과학</option> -->

                </select>
                <select class="ALFSO_Grade" name="grade" required>
                  <option value="" selected>학년</option>
                  <option value="1" >1</option>
                  <option value="2" >2</option>
                  <option value="3" >3</option>
                </select>
                <select class="ALFSO_Bookname" name="book_name" required>
                  <option value="" selected>책이름</option>
                  <?php
                    // for($idx = 1; $idx <= count($book_name); $idx++)
                    // {
                    //   echo "<option value='".$_SESSION['book_num'][$idx-1]."'>".$_SESSION['book_name'][$idx-1]."</option>";
                    // }
                  ?>

                </select>
                <select class="ALFSO_type" name="question_type" required>
                  <option value="" selected>유형</option>
                  <?php
                    // for($idx = 1; $idx <= count($type_index_name); $idx++)
                    // {
                    //   echo "<option value='".$_SESSION['type_index_num'][$idx-1]."'>".$_SESSION['type_index_name'][$idx-1]."</option>";
                    // }
                  ?>

                </select>
              </div>
              <br>
              <div class="ALFS_Difficult">
                <!-- <input type="text" name="difficult" value="" placeholder="난이도 [0 - 10]" required> -->
              </div>
              <br>
              <div class="ALFS_CheckBox row">
                <!-- 최소 1개 이상 선택하도록 해야함. -->
                <!-- <li><input type="checkbox" name="type[]" value="0"><span>사고력</span></li>
                <li><input type="checkbox" name="type[]" value="1"><span>이해력</span></li>
                <li><input type="checkbox" name="type[]" value="2"><span>문제해결력</span></li>
                <li><input type="checkbox" name="type[]" value="3"><span>창의력</span></li> -->
              </div>
              <br>

          <button class="ALFS_Submit" type="button">추가</button>
          <button class="hello" style="display:none;" type="submit">추가</button>          </div>
        </form>




        <br><br>


      </div>
      <div class="ADD_RIGHT">
        <div class="ADD_RIGHT_IMG">

          <table id="history" class="col-1">
            <thead class="col-1">
              <tr class="col-1">
                <th class="col-4">추가날짜</th>
                <th class="col-2">파일</th>
              </tr>
            </thead>
          </table>
          <!-- <img id="ARI_Priview">
          <img id="ARI_Priview2"> -->
        </div>
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
  </body>
</html>
