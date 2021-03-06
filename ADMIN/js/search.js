var type_num;
var type_name;
var subject = getParameters('sub');
var score = new Array();

function getParameters (paramName) {
  // 리턴값을 위한 변수 선언
  var returnValue;

  // 현재 URL 가져오기
  var url = location.href;

  // get 파라미터 값을 가져올 수 있는 ? 를 기점으로 slice 한 후 split 으로 나눔
  var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&');

  // 나누어진 값의 비교를 통해 paramName 으로 요청된 데이터의 값만 return
  for (var i = 0; i < parameters.length; i++)
  {
    var varName = parameters[i].split('=')[0];
    if (varName.toUpperCase() == paramName.toUpperCase())
    {
      returnValue = parameters[i].split('=')[1];
      return decodeURIComponent(returnValue);
    }
  }
}



$.ajax({
  url : "sub_src/getStatistics.php",  //url 바꾸기.
  type:"POST",
  data:{check:0},
  dataType :"json",
  success : function(result)
  {
    type_num = result.length;
    type_name = new Array(type_num);

    for(var idx = 0; idx < result.length; idx++)
    {
      type_name[idx] = result[idx];
      score[idx] = new Array();
    }

  },error:function(request,status,error){
    alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
  }

});



$.ajax({
  url : "sub_src/getStatistics.php",  //url 바꾸기.
  type:"POST",
  data:{check:1},
  dataType :"json",
  success : function(result1)
  {
    // alert(result1);
    for(var idx = 0; idx < result1.length; idx++)
    {
      score[idx] = new Array();
      score[idx] = result1[idx];
    }

  },error:function(request,status,error){
    alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
  }

});



$('.v-line').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.v-line2').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.Subtitle_search').css({
  'left': ($(window).outerWidth() * 0.5 - $('.sl_form').outerWidth()) / 2 + 'px'
});
$('.sl_form').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('td > input').css({
  'height': $('td').outerHeight() + 'px'
});
$('.changebtn').on('click', function() {
  if ($(this).text() == '오답 통계보기') {
    $(this).text('학생 스케쥴 보기');
    $('#calendar').removeClass('Active');
    $('#calendar').addClass('hide');
    $('#student_statics').removeClass('hide');
    $('#student_statics').addClass('Active');
    $('.subject_name').remove();
    makestatic(type_num);
  } else {
    $(this).text('오답 통계보기');
    $('#student_staticsstudent_statics').removeClass('Active');
    $('#student_statics').addClass('hide');
    $('#calendar').removeClass('hide');
    $('#calendar').addClass('Active');
  }
});

$(document).on('click','.history tbody',function(){
  var getId = $(this).attr('id');
  var getClass = $(this).attr('class');
  var tag = $('#'+getId+'.'+getClass+'>td:last').text();
  // var tag = $('#'+getId+'>td:last').text();

  if(tag == 'x')
  {
    // console.log(getId);
    // console.log(getClass);
    // console.log(tag);


    location.href='../../Teacher/Check_Problem.php?id='+getId+'&sub='+getClass;
  }else if(tag =='o')
  {

    //   console.log(getId);
    //   console.log(getClass);
    // console.log(tag);

    alert('이미 채점한 문제지 입니다.');
  }
})
//
// $('.history tbody').on('click',function(){
  // location.href='../../Teacher/Check_Problem.html';
// });


//kindlength 는 불러오는 유형의 갯수
function makestatic(kindlength) {
  console.log(subject);
  //$('#student_statics').empty();
  let i = 0;
  let wrapper = $('<div style="overflow-x:scroll">').addClass('subject_name').appendTo('#student_statics');
  let subjectname = subject;
  let h1 = $('<h1>').text(subjectname).appendTo(wrapper);
  let table = $('<table>').appendTo(wrapper);
  let thead = $('<thead>').appendTo(table);

  if(subject == '영어단어')
  {
    for (i = 0; i < kindlength; i++) {
      $('<td>').text(type_name[i]+'-파트').appendTo(thead);
    }
  }else{
    for (i = 0; i < kindlength; i++) {
      $('<td>').text(type_name[i]).appendTo(thead);
    }
  }
  let tbody = $('<tbody>').appendTo(table);
  for (i = 0; i < kindlength; i++) {
    $('<td>').text(score[i]+'%').appendTo(tbody);
  }


}
