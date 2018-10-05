<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="fullcalendar-3.9.0/fullcalendar.min.css">
      <link href='fullcalendar-3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->

      <script type="text/javascript" src="fullcalendar-3.9.0/lib/moment.min.js"></script>
      <script type="text/javascript" src="fullcalendar-3.9.0/lib/jquery.min.js"></script>
      <!-- <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.js"></script> -->

      <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.min.js"></script>

      <script type="text/javascript">
    //   $(document).ready(function(){
    //       $('#calendar').fullCalendar({
    //        year: 2012,
    //     month: 1,
    //     date: 25,
    //     header: {
    //      left: 'prev,next',
    //         center: 'title',
    //            right: 'today'
    //        },
    //        buttonText: {
    //            today: 'today',
    //        },
    //        height: 600,
    //        selectable: true,
    //     selectHelper: true,
    //        events: function (start, end, timezone, callback) {
    //            $.ajax({
    //             url: '/calendar.do',
    //             type: "GET",
    //             async:false,
    //             datatype: 'json',
    //             data: {calendarDate:$('#calendar').fullCalendar('getDate').format('YYYYMMDD')},
    //             success: function(data){
    //                 var json = data.calendarList;
    //                 var events = [];
    //
    //                 $.each(json, function(i, obj) {
    //                  var titleStr;
    //                  if(obj.code == "1"){
    //                   titleStr = "1.업무준비 [" + obj.title + "]건";
    //                  }else if(obj.code == "2"){
    //                   titleStr = "2.업무중 [" + obj.title + "]건";
    //                  }else if(obj.code == "3"){
    //                   titleStr = "3.업무완료 [" + obj.title + "]건";
    //                  }else if(obj.code == "4"){
    //                   titleStr = "4.업무마감 [" + obj.title + "]건";
    //                  }else{
    //                   titleStr = obj.title;
    //                   $("td[data-date='"+obj.start+"']").addClass('holiday');
    //                   $("td[data-date='"+obj.start+"']").children().css("color","red");
    //                  }
    //                  events.push({id: i+1, title: titleStr, start: obj.start, end: obj.end, color:'#'+obj.color, allDay: true});
    //              });
    //                 callback(events);
    //             },
    //            });
    //        },
    //        eventAfterRender: function (event, element, view) {
    //        },
    //        dayClick: function(date, jsEvent, view) {
    //         return false;
    //        },
    //        eventClick: function(calEvent, jsEvent, view) {
    //         return false;
    //     },
    //   });
    // });
      $(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
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
        })

      });
      </script>
  </head>
  <body>

    <div id='calendar'>

    </div>

  </body>
</html>
