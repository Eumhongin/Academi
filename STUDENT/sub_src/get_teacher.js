// var wrapper = $('<div>').addClass('teacher_name1').appendTo('.teacher_Schedule');
// var box = $('.teacher_name1').append("<p><h1>Teacher Name</h1></p>");
// var contents = $('<div id="calendar_name1">').appendTo(wrapper);

$.ajax({
  url:"teacher_load/get_teacher.php",
  dataType:"json",
  success:function(result)
  {
    for(var idx = 0; idx < result[0].length; idx++)
    {
      var wrapper = $('<div id="'+result[0][idx]+'">').addClass('teacher_name').appendTo('.teacher_Schedule');
      var box = $('#'+result[0][idx]+'').append("<p><h1>"+result[1][idx]+" 선생님</h1></p>");
      var contents = $('<div id="calendar_'+result[1][idx]+'">').appendTo(wrapper);
    }
  },
  error:function(request,status,error){
    alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
  }
});
