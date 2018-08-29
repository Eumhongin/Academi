<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    세팅
    <button onclick="location.href = '../../index.php'">로고</button>
    <button onclick="location.href = 'BG/bg_change.php'">배경 수정</button>
    <button onclick="location.href = 'INFO_STUDENT/stu_info_change.php'">학생 정보</button>
    <button onclick="location.href = 'INFO_TEACHER/tea_info_change.php'">교사 정보</button>

    <input type="file" id="selectedFile" style="display: none;" />
    <button class='picedit' type="button" name="button" onclick="document.getElementById('selectedFile').click();">사진추가하기</button>

  </body>
</html>
