var check_array = new Array();
makeproblem(6);


function makeproblem(plength){
  for(let i = 0; i < plength; i++){
    console.log(plength);
    $('<p onclick=check('+i+')>').text('문제').appendTo('.form');
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
});
