<!DOCTYPE html>
<?php
  // session_start();
  include("..\..\module\dbConnect.php");
  include("..\..\module\dbContentsEcho.php");

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>문제추가하기</title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/add.css">

    <script type="text/javascript">
    $(document).ready(function(){


    });

    </script>

  </head>
  <body>
    <img class="gohome" src="../img/home-ios-icon.png" alt="go-index" onclick="location.href='../aca_admin.html'">
    <div class="v-line">

    </div>
    <span class="Preview">미리보기</span>
    <span class="Subtitle_ADD">문제추가</span>
    <section class="row">
      <div class="ADD_LEFT">
        <div class="ALPanel_Regular">
          <span class="ALPR_span">정규문제</span>
        </div>
        <div class="ALPanel_UnRegular">
          <span class="ALPUR_span">비정규문제</span>
        </div>

        <form  class="ADD_LEFT_FORM" name = "form" action="question_add.php" method="post" enctype="multipart/form-data">
            <div class="ALF_Shield">
              <div class="ALFS_File_Shield row">
                <span class="ALFSFS_FilePath"></span>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="upload" id="selectedFile" style="display: none;" required/>
                <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">찾기</button>
              </div>
              <br>
              <div class="Not_Defined">
                <input type="text" name="" value="" placeholder="뭐들어가기로 했지..">
              </div>
              <br>
              <div class="ALFS_Paging_Number row">
                <div class="ALFSPN_Page">
                  <input type="text" name="page" value="" placeholder="쪽수" required>
                </div>
                <div class="ALFSPN_Number">
                  <input type="text" name="num" value="" placeholder="번호" required>
                </div>
              </div>
              <br>
              <div class="ALFS_Option row">
                <?php
                  // 문제지 이름
                  $book_name = DB_echo("SELECT book_name FROM question_book_name","book_name");

                  //문제 유형
                  //수 1, 수 2 이런식으로도 선택할 수 있게 해야함

                  //문제 세부 유형
                  $type_index_name = DB_echo("SELECT type_index_name FROM question_type_math_index", "type_index_name");
                ?>
                <select class="ALFSO_Subject" name="subject" required>
                  <option value="" selected>과목</option>
                  <option value="수학" >수학</option>

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
                    for($idx = 1; $idx <= count($book_name); $idx++)
                    {
                      echo "<option value='".$book_name[$idx-1]."'>".$book_name[$idx-1]."</option>";
                    }
                  ?>
                  <!-- <option value="0" >1</option>
                  <option value="0" >2</option>
                  <option value="0" >3</option>
                  <option value="0" >4</option>
                  <option value="0" >5</option> -->
                </select>
                <select class="ALFSO_type" name="question_type" required>
                  <option value="" selected>유형</option>
                  <?php
                    for($idx = 1; $idx <= count($type_index_name); $idx++)
                    {
                      echo "<option value='".$type_index_name[$idx-1]."'>".$type_index_name[$idx-1]."</option>";
                    }
                  ?>
                  <!-- <option value="0" >1</option>
                  <option value="0" >2</option>
                  <option value="0" >3</option>
                  <option value="0" >4</option>
                  <option value="0" >5</option> -->
                </select>
              </div>
              <br>
              <div class="ALFS_Difficult">
                <input type="text" name="difficult" value="" placeholder="난이도 [0 - 10]" required>
              </div>
              <br>
              <div class="ALFS_CheckBox row">
                <!-- 최소 1개 이상 선택하도록 해야함. -->
                <li><input type="checkbox" name="type[]" value="사고력"><span>사고력</span></li>
                <li><input type="checkbox" name="type[]" value="이해력"><span>이해력</span></li>
                <li><input type="checkbox" name="type[]" value="문제해결력"><span>문제해결력</span></li>
                <li><input type="checkbox" name="type[]" value="창의력"><span>창의력</span></li>
              </div>
              <br>





            <button class="ALFS_Submit" type="submit">추가</button>
          </div>
        </form>
        <form  class="ADD_LEFT_FORM2 hide" name = "form" action="question_add.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="ALF_Shield">
              <div class="ALFS_File_Shield row">
                <span class="ALFSFS_FilePath"></span>
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                <input type="file" name="form2_upload" id="selectedFile" style="display: none;" required/>
                <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">찾기</button>
              </div>
              <br>
              <div class="Not_Defined">
                <input type="text" name="" value="" placeholder="뭐들어가기로 했지..">
              </div>
              <br>
              <div class="ALFS_Paging_Number row">
                <div class="ALFSPN_Page">
                  <input type="text" name="school" value="" placeholder="학교" required>
                </div>
                <div class="ALFSPN_Number">
                  <input type="text" name="grade" value="" placeholder="학년" required>
                </div>
              </div>
              <br>
              <div class="ALFS_PrintName">
                <input type="text" name="printname" value="" placeholder="프린트물 이름" required>
              </div>
              <br>
              <div class="ALFS_Difficult">
                <input type="text" name="difficult" value="" placeholder="난이도 [0 - 10]" required>
              </div>
              <br>
              <div class="ALFS_CheckBox row">
                <!-- 최소 1개 이상 선택하도록 해야함. -->
                <li><input type="checkbox" name="type[]" value="사고력"><span>사고력</span></li>
                <li><input type="checkbox" name="type[]" value="이해력"><span>이해력</span></li>
                <li><input type="checkbox" name="type[]" value="문제해결력"><span>문제해결력</span></li>
                <li><input type="checkbox" name="type[]" value="창의력"><span>창의력</span></li>
              </div>
              <br>





            <button class="ALFS_Submit" type="submit">추가</button>
          </div>
        </form>


        <br><br>


      </div>
      <div class="ADD_RIGHT">
        <div class="ADD_RIGHT_IMG">
          <img id="ARI_Priview">
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