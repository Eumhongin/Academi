
$('span').css({
  'margin-top':($('.writing').outerHeight()-$('span').outerHeight())/2+'px'
});
$('.writing > p').css({
  'right':($('.writing').outerWidth()-($('.writing_wrapper').outerWidth())-$('span').outerWidth())/2+'px',
  'height':$('.writing').outerHeight()+'px'
});
$('.writing > p').hover(function(){
  $('.writing').css({
    'background-color':'rgb(212, 42, 88)'
  });
},function(){
  $('.writing').css({
    'background-color':'#266BA8'
  });
});
$('.writing > p').on('click',function(){
  //console.log($('.writing_box > textarea').text());
  if(!$('.recent').hasClass('active')){
    var time = new Date();
    var wrapper = $('<div>').addClass('read_wrapper').appendTo('.recent');
    var box = $('<div>').addClass('box').appendTo(wrapper);
    var p = $('<p>').text(time.getFullYear()+'-'+(parseInt(time.getMonth())+1)+'-'+time.getDate()+' 상담내용').appendTo(box);
    var hr = $('<hr>').appendTo(box);
    var textarea = $('<div>').text($('textarea').val()).appendTo(box);
    box.css({
      'height':$('.writing_wrapper').outerHeight()+'px'
    });
    textarea.css({
      'margin':'1% 0 1% 0'
    });
    $('.recent').addClass('active');
  }
});


// 데이터불러올떄 시간을 불러와서 var p 에보면 시간을 넣는 공간이있음.
// 데이터불러올때 옛날꺼부터 불러올것.(왜냐하면 옛날께 젤 밑으로 가야하니까.)
// 넣는 방식은 sql불러온다음에 쿼리를넣고 반환값을 배열에넣은후 var content . text안에 내용을 집어넣으세요.
// 그리고 for문으로 계속 끝까지 돌립시다!

//
// ------------------ Example sudo code -------------------------------
// 기준은 arr[0] 이 가장 최근글이라할때.
// arr[] = conn.sql(select * from counsler);
// i = arr.length;  -> 맨마지막 글을 헤드로잡고
// while(eof){
//   var wrapper = $('<div>').addClass('read_wrapper').appendTo('.read');
//   var box = $('<div>').addClass('box').appendTo(wrapper);
//   var p = $('<p>').text(arr[i].time+' 상담내용').appendTo(box);
//   var hr = $('<hr>').appendTo(box);
//   var content = $('<div>').text(arr[i].content).appendTo(box);
//   box.css({
//     'height':$('.writing_wrapper').outerHeight()+'px'
//   });
//   content.css({
//     'word-break':'break-all',
//     'margin':'1% 0 1% 0'
//   });
//   i--;  -> 가장오래된거부터 찍을수있게
// }
//
//
// 블럭만들기 원본
// var wrapper = $('<div>').addClass('read_wrapper').appendTo('.read');
// var box = $('<div>').addClass('box').appendTo(wrapper);
// var p = $('<p>').text(2018-10-24 의 형태로 시간을 넣으시게+' 상담내용').appendTo(box);
// var hr = $('<hr>').appendTo(box);
// var content = $('<div>').text(상담내용을 넣으시게).appendTo(box);
// box.css({
//   'height':$('.writing_wrapper').outerHeight()+'px'
// });
// content.css({
//   'word-break':'break-all',
//   'margin':'1% 0 1% 0'
// });
