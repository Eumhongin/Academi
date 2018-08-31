<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">

    function getSelectValue(frm) // 즐겨찾기에 추가해놈 , 웹마당
    {
      frm.textValue.value = frm.book_name.options[frm.book_name.selectedIndex].text;
      frm.optionValue.value = frm.book_name.options[frm.book_name.selectedIndex].value;
    }

    </script>

  </head>
  <body>


    <?php
    $i = 0;
    include("..\..\module\dbConnect.php");

    $sql = "SELECT * FROM question_book_name";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    {
      $name[$i] = $row[book_name];

      $i++;
    }

     ?>

    문제추가
    <button onclick="location.href = '../../index.html'">로고</button>
    <br><br>
    <!-- 문제이미지 추가영역 -->
<hr>


    <form name = "form" action="question_add.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
      <input type="file" name="upload" id="selectedFile" style="display: none;" />
      <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">사진추가하기</button>
      <br><br>
    <!-- <select name= "book_name" onchange="getSelectValue(this.form);"> -->
  <select name= "book_name">
    <option value= "">책 이름!</option>
    <?php
    $a = 1;
    while($a <= $i)
    {
        echo '<option value ="'.$a.'">'.$name[$a-1].'</option>';
        $a++;
    }

    ?>
    <!-- <option value= "수능완성"></option>
    <option value= "2">쎈</option>
    <option value= "3">숨라쿰라우데</option>
    <option value= "4">수학의 정석</option> -->
  </select> <br><br>

    <input type = "text" name = "textValue"> <br><br>
    <input type="text" name="optionValue">
    <br><br>
    <button class="picedit" type="submit">변경된 정보 저장하기</button>
  </form>


    <br><br>

    <?php mysqli_close($coon); ?>
  </body>
</html>
