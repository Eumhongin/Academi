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

function setDATA(result0, result1, result2)
{
  var user_id = result2;
  var calendar = $('#calendar_'+result1+'').fullCalendar({
    editable:false,
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },

    events: 'teacher_load/teacher'+result0+'.php',
    navLinks: true, // can click day/week names to navigate views
    selectable: true,
    selectHelper: true,
    select: function(start, end) {
      alert(user_id);
      var check = 0;
      var title = prompt('Event Title:');
      // var user_id = prompt('선생님의 번호를 숫자만 입력해주세요. ex) 임중섭 선생님 = 1..');
      var eventData;
      if(title)
      {
        var start = $.fullCalendar.formatDate(start,"Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end,"Y-MM-DD HH:mm:ss");
        var dayOfWeek = DAY_name(start);

        if(confirm(result1+' 선생님께 \n'+start+' 부터\n'+end+' 까지 예약을 하시겠습니까?'))
        {
          $.ajax({
            type : 'POST',
            url : '../fullcalendar/fullCalendar_insert.php',
            data : {title : title, user_id:user_id, start:start, end:end, dayOfWeek:dayOfWeek, check:check},
            success : function()
            {
              eventData = {
                title: title,
                start: start,
                end: end,
                color: '#F79F81'
              };
              $('#calendar_'+result1+'').fullCalendar('renderEvent', eventData, true); // stick? = true

            }
          });
        }

      }

      $('#calendar_'+result1).fullCalendar('unselect');
    }

  });
}

$.ajax({
  url:"teacher_load/get_teacher.php",
  dataType:"json",
  success:function(result)
  {
    for(var idx = 0; idx < result[0].length; idx++)
    {
      setDATA(result[0][idx],result[1][idx],result[2][idx]);
    }
  },
  error:function(request,status,error){
    alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
  }
});



// page is now ready, initialize the calendar...
// var result_index = 0;
var calendar = $('#calendar').fullCalendar({
  editable:false,
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },

  events: '../fullcalendar/fullCalendar_load.php',
  navLinks: true, // can click day/week names to navigate views
  selectable: true,
  selectHelper: true

});
//
//
//
//
//
// var calendar = $('#calendar_name').fullCalendar({
//   editable:false,
//   header: {
//     left: 'prev,next today',
//     center: 'title',
//     right: 'month,agendaWeek,agendaDay,listWeek'
//   },
//
//   events: 'teacher_load/teacher0.php',
//   navLinks: true, // can click day/week names to navigate views
//   selectable: true,
//   selectHelper: true
//
// });
//
//
//
//
//
//
// var calendar = $('#calendar_name1').fullCalendar({
//   editable:false,
//   header: {
//     left: 'prev,next today',
//     center: 'title',
//     right: 'month,agendaWeek,agendaDay,listWeek'
//   },
//
//   events: 'teacher_load/teacher0.php',
//   navLinks: true, // can click day/week names to navigate views
//   selectable: true,
//   selectHelper: true
//
// });

// var calendar = $('#calendar_선생님이름').fullCalendar({
//   editable:false,
//   header: {
//     left: 'prev,next today',
//     center: 'title',
//     right: 'month,agendaWeek,agendaDay,listWeek'
//   },
//
//   events: '../fullcalendar/fullCalendar_load.php',
//   navLinks: true, // can click day/week names to navigate views
//   selectable: true,
//   selectHelper: true
//
// });
