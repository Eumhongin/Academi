<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>학생 상세정보</title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../fullcalendar-3.9.0/fullcalendar.min.css">
    <link href='../../fullcalendar-3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="../../fullcalendar-3.9.0/lib/moment.min.js"></script>
    <script type="text/javascript" src="../../fullcalendar-3.9.0/lib/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.js"></script> -->
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script type="text/javascript" src="../../fullcalendar-3.9.0/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/search.css">
    <script type="text/javascript">
      $(document).ready(function(){
        $('.search_left').css({
          'height':$('.v-line2').outerHeight()+'px',
          'top':$(window).outerHeight() * 0.05 + 'px'
        });
        console.log($('.target1').outerWidth(true)+$('.target2').outerWidth(true)+$('.target').outerWidth(true));
        $('.address').css({
          'width':$('.target1').outerWidth()+$('.target2').outerWidth()+$('.target').outerWidth()-4+'px',

        });
        $('.sf_shield').css({
          'height':$('.search_left').outerHeight()+'px'
        });
        $('.sfs').css({
          'height':$('.sf_shield').outerHeight()*0.3+'px'
        });
        $('.sfs_frame').css({
          'margin-top':$('.sf_shield').outerHeight()*0.05+'px',
          'height':$('.sf_shield').outerHeight()*0.55+'px'
        });
        $('.sfs_frame > iframe').css({
          'height':$('.sfs_frame').outerHeight()-$('.sfs_frame > p').outerHeight()+'px'
        });
        $('.sfs_top > hr').css({
          'width':$('.sfs_top > span').outerWidth()+'px',
          'margin':'1% 0 0 0'
        });

      });


    </script>

  </head>
  <body>
    <img class="gohome" src="../img/home-ios-icon.png" alt="go-index" onclick="location.href='../../intro/Temp.html'">
    <div class="v-line2">

    </div>


    <section class="row">
      <!-- /////////////왼쪽//////////// -->
      <div class="search_left">
        <div class="sf_shield">
          <div class="sfs">

            <div class="sfs_top">
              <span><?php echo $_SESSION['stu_name'][0]; ?> 학생</span>
              <hr>
              <p>학생 특징</p>
            </div>
            <div class="sfs_info">
              <p>상세정보</p>
              <form class="" action="modify_stu_info.php" method="post">
                <button type = "submit"/>정보저장</button>
              <table>
                <tbody>
                  <td>아이디</td>

                  <td><input type="text" name="stu_name" value="" placeholder="<?php echo $_SESSION['stu_name'][0]; ?> "></td>
                  <td>비밀번호</td>
                  <td class="target"> <input type="text" name="stu_phone_num" value="" placeholder="<?php echo $_SESSION['stu_phone_num'][0]; ?>"> </td>
                  <td class="target1 c">분류</td>
                  <td class="target2"> <input type="text" name="stu_team_leader" value="" placeholder="<?php echo $_SESSION['stu_team_leader'][0]; ?>"> </td>
                </tbody>
                <tbody>
                  <td>이름</td>

                  <td><input type="text" name="stu_name" value="" placeholder="<?php echo $_SESSION['stu_name'][0]; ?> "></td>
                  <td>휴대폰</td>
                  <td class="target"> <input type="text" name="stu_phone_num" value="" placeholder="<?php echo $_SESSION['stu_phone_num'][0]; ?>"> </td>
                  <td class="target1 c">팀장</td>
                  <td class="target2"> <input type="text" name="stu_team_leader" value="" placeholder="<?php echo $_SESSION['stu_team_leader'][0]; ?>"> </td>
                </tbody>
                <tbody>
                  <td>학교</td>
                  <td> <input type="text" name="stu_school_name" value="" placeholder="<?php echo $_SESSION['stu_school_name'][0]; ?>"> </td>
                  <td>보호자<br />연락처</td>
                  <td> <input type="text" name="stu_parents_phone_num" value="" placeholder="<?php echo $_SESSION['stu_parents_phone_num'][0]; ?>"> </td>
                  <td class="c">매니저</td>
                  <td> <input type="text" name="stu_manager_name" value="" placeholder="<?php echo $_SESSION['stu_manager_name'][0]; ?>"> </td>
                </tbody>
                <tbody>
                  <td>학년</td>
                  <td> <input type="text" name="stu_grade" value="" placeholder="<?php echo $_SESSION['stu_grade'][0]; ?>"> </td>
                  <td>주소</td>
                  <td class="address"><input type="text" name="stu_address" value="" placeholder="<?php echo $_SESSION['stu_address'][0]; ?>"> </td>
                </tbody>
                <tbody>
                  <td>계열</td>
                  <td><input type="text" name="stu_affiliation" value="<?php echo $_SESSION['stu_affiliation'][0]; ?>" placeholder=""> </td>

                  <td>목표대학</td>
                  <td>하버드</td>
                  <td>성적</td>
                  <td>상</td>
                </tbody>

              </table>

              </form>

            </div>
          </div>



          <?php
          //echo ("이름12 : $_SESSION[name]<br/>\n");
        //  echo ("학교 : $_SESSION[school_name]<br/>\n");
        //  echo ("학년 : $_SESSION[grade]<br/>\n");
          ?>
        </div>
      </div>

      <!-- /////////////오른쪽//////////// -->

    </section>

    <!--dialog는 스케줄 변경할 떄 사용  -->

    <?php

    /*if(!isset($_SESSION['LOG_id']))
    {
      echo ("<script>alert('로그인해야 이용가능 합니다.');</script>");
      echo("<script>location.href = '../index.html';</script>");
    }*/

    // echo ("이름 : $_SESSION[name]<br/>\n");
    // echo ("학교 : $_SESSION[school_name]<br/>\n");
    // echo ("학년 : $_SESSION[grade]<br/>\n");
     ?>

    <?php     // 파일에 데이터를 써내려가는건 http://araikuma.tistory.com/164 에서 참고 할것
    //readfile("stu_history/$_SESSION[name].txt");
    // $lines = @file("stu_history/$_SESSION[name].txt") or $result = "파일을 못 읽음.";
    // if($lines != null)
    // {
    //   $result = '<table border ="1">';  // ★★★★★CSS입혀서 이쁘게 뽑을 수 있는지 해볼것,
    //   $result .= "<tr><th>NAME</th><th>BOOK_NAME</th><th>TYPE_MATE</th><th>TYPE_INDEX</th><th>PAGE</th><th>NUMBER</th></tr>";
    //   for($i = 0; $i < count($lines); $i++)
    //   {
    //     $result .= "<tr>";
    //     $arr = explode(",", $lines[$i]);
    //     for($j = 0; $j<6; $j++)
    //     {
    //       $result .= "<td>{$arr[$j]}</td>";
    //     }
    //     $result .= "</tr>";
    //   }
    //   $result .= "</table>";
    // }
    //
    // echo $result;
     ?>

     <script src="fullcalender.js" charset="utf-8"></script>
     <script src="../js/search.js" charset="utf-8"></script>
  </body>
</html>
