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
var calendar = $('#calendar_name').fullCalendar({
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
var calendar = $('#calendar_name1').fullCalendar({
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
