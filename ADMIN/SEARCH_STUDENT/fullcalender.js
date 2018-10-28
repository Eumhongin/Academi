var event_id; // 스케줄 클릭시 해당 스케줄의 id값을 저장하기 위한 변수eventClick:function(event)에서 사용
var event_title;
var event_start; // 스케줄 클릭시 해당 스케줄의 start time값을 저장하기 위한 변수eventClick:function(event)에서 사용
var event_end;

var week=['sun','mon','tue','wed','thu','fri','sat'];//요일

function DAY_name(date)//요일 받아오기
{
  var dayOfWeek = week[new Date(date).getDay()];
  return dayOfWeek;
}


// page is now ready, initialize the calendar...
// var result_index = 0;
var calendar = $('#calendar').fullCalendar({
  editable:true,
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },

  events: '../../fullcalendar/fullCalendar_load.php',
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
      var dayOfWeek = DAY_name(start);
      $.ajax({
        type : 'POST',
        url : '../../fullcalendar/fullCalendar_insert.php',
        data : {title : title, start:start, end:end, dayOfWeek:dayOfWeek},
        success : function()
        {
          eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
          // alert("Added Successfully");
          // calendar.fullCalendar('refetchEvents');
        },
        error:function(request,status,error){
         alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
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
    var dayOfWeek = DAY_name(event_start);
    var title = event.title;
    var id = event.id;
    $.ajax({
      type:'POST',
      url:'../../fullcalendar/fullCalendar_update.php',
      data:{title:title, start:start, end:end, id:id, dayOfWeek:dayOfWeek},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
     },
     error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }
    });
  },

  eventDragStop:function(event)//이벤트 드랍하기 전의 정보를 가져옴.
  {
    if(confirm("이동하시겠습니까?"))
    {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var dayOfWeek = DAY_name(start);
      var id = event.id;
      //드랍 업데이트 구분 - 1) 원래있던 정보 삭제 따라서 fullCalendar_delte.php 사용

      $.ajax({
        url:"../../fullcalendar/fullCalendar_delete.php",
        type:"POST",
        data:{id:id, dayOfWeek:dayOfWeek},
        success:function()
        {
          alert("기존 데이터 삭제");
         // calendar.fullCalendar('refetchEvents');
         // alert("Event Updated");
        },
        error:function(request,status,error){
          alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }
      });
    }else
    {
      alert('이동취소');
    }

  },

  eventDrop:function(event)
  {

     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var dayOfWeek = DAY_name(start);
     var id = event.id;
     // var check = 2; //드랍 업데이트 구분 - 2) 옮긴 정보

     alert(id);
     $.ajax({
      url:"../../fullcalendar/fullCalendar_insert.php",
      type:"POST",
      data:{title:title, start:start, end:end, dayOfWeek:dayOfWeek},
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
    event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    // event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    event_title = event.title;
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
               var dayOfWeek = DAY_name(event_start);
               var check =1;

               $.ajax({
                   type:'POST',
                   url:'../../fullcalendar/fullCalendar_update.php',
                   data:{title:title, id:id, check:check, dayOfWeek:dayOfWeek},
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
                var dayOfWeek = DAY_name(event_start);
                var id = event_id;
                alert(dayOfWeek);
                $.ajax({
                  url:"../../fullcalendar/fullCalendar_delete.php",
                  type:"POST",
                  data:{id:id, dayOfWeek:dayOfWeek},
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