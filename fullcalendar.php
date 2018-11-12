<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="fullcalendar-3.9.0/fullcalendar.min.css">
      <link href='fullcalendar-3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">


      <script type="text/javascript" src="fullcalendar-3.9.0/lib/moment.min.js"></script>
      <script type="text/javascript" src="fullcalendar-3.9.0/lib/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
      <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
      <!-- <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.js"></script> -->

      <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.min.js"></script>

      <script type="text/javascript">
      $(document).ready(function() {
        var event_id; // 스케줄 클릭시 해당 스케줄의 id값을 저장하기 위한 변수eventClick:function(event)에서 사용

        // page is now ready, initialize the calendar...
        var result_index = 0;
        var calendar = $('#calendar').fullCalendar({
          editable:true,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
          },

          events: 'fullCalendar_load.php',
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
                type : 'POST',
                url : 'fullCalendar_insert.php',
                data : {title : title, start:start, end:end},
                dataType:'json',
                success : function(result)
                {
                  // alert(title);
                  // alert(start);
                  // alert(end);
                  // alert(result);
                  eventData = {
                    title: title,
                    start: start,
                    end: end
                  };
                  $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                  // alert("Added Successfully");
                  // calendar.fullCalendar('refetchEvents');
                }
              });
            }
            // if (title) {
            //   eventData = {
            //     title: title,
            //     start: start,
            //     end: end
            //   };
            //   $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
            // }
            $('#calendar').fullCalendar('unselect');
          },
          editable:true,
          eventResize:function(event)
          {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
              type:'POST',
              url:'fullCalendar_update.php',
              data:{title:title, start:start, end:end, id:id},
              success:function(result){
               calendar.fullCalendar('refetchEvents');
               alert('Event Update');
             },
             error:function(request,status,error){
 							alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
 						}
            });
          },

          eventDrop:function(event)
          {
             var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
             var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
             var title = event.title;
             var id = event.id;
             $.ajax({
              url:"fullCalendar_update.php",
              type:"POST",
              data:{title:title, start:start, end:end, id:id},
              success:function()
              {
               calendar.fullCalendar('refetchEvents');
               alert("Event Updated");
              },
              error:function(request,status,error){
  							alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
  						}
             });
          },

          eventClick:function(event)
          {
            event_id = event.id;
            $("#dialog").dialog("open");
              // if(confirm("Are you sure you want to remove it?"))
              // {
              //   var id = event.id;
              //   $.ajax({
              //     url:"fullCalendar_delete.php",
              //     type:"POST",
              //     data:{id:id},
              //     success:function()
              //     {
              //       calendar.fullCalendar('refetchEvents');
              //       alert("Event Removed");
              //       _delete = 0;
              //     },
              //     error:function(request,status,error){
              //       alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
              //     }
              //   });
              // }
          }

        });

        $(function(){
           $("#dialog").dialog({
               autoOpen:false, //자동으로 열리지않게
               position:[100,200], //x,y  값을 지정
               //"center", "left", "right", "top", "bottom"
               modal:true, //모달대화상자
               resizable:false, //크기 조절 못하게

               buttons:{
                   "이름 변경":function(){
                       $(this).dialog("close");
                       var title = prompt("변경할 제목을 입력하시오");
                       var id = event_id;
                       var check =1;
                       $.ajax({
                           type:'POST',
                           url:'fullCalendar_update.php',
                           data:{title:title, id:id, check:check},
                           success:function(result){
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Update');
                            event_id = null;
                          },
                          error:function(request,status,error){
              							alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
              						}
                       });
                   },"삭제":function(){
                      $(this).dialog("close");
                      if(confirm("Are you sure you want to remove it?"))
                      {
                        var id = event_id;
                        alert(id);
                        $.ajax({
                          url:"fullCalendar_delete.php",
                          type:"POST",
                          data:{id:id},
                          success:function()
                          {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Removed");
                            event_id = null;
                          },
                          error:function(request,status,error){
                            alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                          }
                        });
                      }
                   }
               }
           });

       });

      });
      </script>
  </head>
  <body>
    <div id="dialog" title="공지사항">
      변경, 삭제를 선택하세요.
    </div>

    <div id='calendar'>

    </div>

  </body>
</html>
