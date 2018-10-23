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
