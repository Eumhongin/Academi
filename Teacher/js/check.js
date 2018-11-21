var check_array = new Array();
var num = getParameters('id');
get_marking(num);
// makeproblem(num);



function get_marking (number)
{

  $.ajax({
    url : "get_question.php",  //url 바꾸기.
    type:"POST",
    data:{number:number},
    dataType :"json",
    success : function(result)
    {

      for(var idx = 1; idx < result[0].length; idx++)
      {
        $('<p onclick=check('+idx+')>').attr('id',result[0][idx]).text('문제'+(idx)).appendTo('.form');
      }
      $('<button type="button" name="button">').text('채점 완료 하기').appendTo('.form');

    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }
  });

}


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




function makeproblem(plength){
  for(let i = 0; i < plength; i++){
    console.log(plength);
    $('<p onclick=check('+i+')>').text('문제'+(i+1)).appendTo('.form');
  }
  $('<button type="button" name="button">').text('채점 완료 하기').appendTo('.form');
}





// 눌렀는지 안눌렀는지 체크하는거
function check(a){
  // 눌렀다면? 큐에서 지움
  if(check_array.indexOf(1+a) != -1){
    check_array.splice(check_array.indexOf(1+a),1);
    console.log(check_array);
  }
  else{ //아니라면? 큐에 추가함
    check_array.push(1+a);
    console.log(check_array);

  }

}

$(document).ready(function(){
  // 스타일 시트 나중에 적용하는거
  $('<link>').attr({'rel' : 'stylesheet','href' : 'css/check_problem.css'}).appendTo('head');
  $('p').on('click',function(){
    if($(this).css('background-color') == 'rgb(255, 36, 36)'){
      $(this).css({
        'background-color':'rgb(13, 166, 33)'
      });
    }
    else{
      $(this).css({
        'background-color':'rgb(255, 36, 36)'
      });
    }
  });
});
