<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>학생 상세정보</title>
    <script src="../js/jquery-min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="../../fullcalendar-3.9.0/fullcalendar.min.css">
    <link href='../../fullcalendar-3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script type="text/javascript" src="../../fullcalendar-3.9.0/lib/moment.min.js"></script>
    <script type="text/javascript" src="../../fullcalendar-3.9.0/lib/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.js"></script> -->

    <script type="text/javascript" src="../../fullcalendar-3.9.0/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="../fonts/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/search.css">
    <script type="text/javascript">
      $(document).ready(function(){
          // page is now ready, initialize the calendar...

          $('#calendar').fullCalendar({
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay,listWeek'
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
              var title = prompt('Event Title:');
              var eventData;
              if(title)
              {
                var start = $.fullCalendar.formatDate(start,"Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end,"Y-MM-DD HH:mm:ss");

                $.ajax({
                  url : "fullCalendar_insert.php",
                  tpye : "POST",
                  data : {title : title, start:start, end:end},
                  success : function()
                  {
                    calendar.fullCalendar('refetchEvents');
                    alert("Added Successfully");
                  }
                })
              }
              // if (title) {
              //   eventData = {
              //     title: title,
              //     start: start,
              //     end: end
              //   };
              //   $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
              // }
              // $('#calendar').fullCalendar('unselect');
            },
            events: [
              {
                title: "Java seminar",
                start: "2018-10-06",
                end: "2018-10-10"
              },
              {
                title: "Java seminar",
                start: "2018-10-11",
                end: "2018-10-12"
              },
              {
                title: "Java seminar",
                start: "2018-10-13",
                end: "2018-10-14"
              }

            ]
          });



      });

    </script>
  </head>
  <body>
    <img class="gohome" src="../img/home-ios-icon.png" alt="go-index" onclick="location.href='../aca_admin.html'">
    <div class="v-line">

    </div>

    <span class="Subtitle_search">학생조회</span>
    <section class="row">
      <!-- /////////////왼쪽//////////// -->
      <div class="search_left">
        <div class="sf_shield">

          <?php
          echo ("이름12 : $_SESSION[name]<br/>\n");
          echo ("학교 : $_SESSION[school_name]<br/>\n");
          echo ("학년 : $_SESSION[grade]<br/>\n");
          ?>
        </div>
      </div>

      <!-- /////////////오른쪽//////////// -->
      <div class="search_right">
        <div id='calendar'>

        </div>

      </div>
    </section>
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


    <?php

     ?>

  </body>
</html>
