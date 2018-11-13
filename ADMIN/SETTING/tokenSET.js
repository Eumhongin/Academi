var aaa=0;
var count=0;
$("#token").on('click',function(){
  $.ajax({
    url:"tokenGET.php",
    type : "POST",
    data : {count:count},
    success : function(result)
    {

      if(aaa != 0)
      {
        $('#next').remove();
      }

      alert('생성된 토큰 값을 따옴표를 제외하고 복사해 주세요.')

        var tag = $('.SET_Section>li:last>p').text();
        // var ff = $(tag+'>p').text();
        $('.SET_Section>li:last>p').text(result);
        var next = $('<button type="button">').attr('id','next').text('계정 생성하기').appendTo('.SET_Section>li:last');
        aaa = $('#next');

        count++;
        console.log(count);
    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });
});



$(document).on("click","#next",function(event){
  document.location.href='../../Teacher/join.html';
});
