$('.v-line').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.MR_option').css({
  'height': $(window).outerHeight() * 0.8 + 'px'
});
$('.MR_option').css({
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.Detail').css({
  'right': ($(window).outerWidth() * 0.5 - $('.MR_option').outerWidth()) * 0.5 + 'px'
});
$('.MODIFY_LEFT_FORM').css({
  'height': $(window).outerHeight() * 0.7 + 'px',
  'margin-top': $(window).outerHeight() * 0.2 + 'px'
});
$('.Subtitle_MODIFY').css({
  'left': ($(window).outerWidth() * 0.5 - $('.MODIFY_LEFT_FORM').outerWidth()) / 2 + 'px'
});
$('.ADD_LEFT_FORM').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.MLL_History').css({
  'position': 'absolute',
  'top': $(window).outerHeight() * 0.1 + 'px',
  'font-size': '2vw',
  'left': ($(window).outerWidth() * 0.5 - $('.MODIFY_LEFT_FORM').outerWidth()) / 2 + 'px',
  'font-family': 'BS2'
});
$('.MR_option > *').css({
  'margin-left': ($('.MR_option').outerWidth() - $('.MRO_Subject').outerWidth() * 4) / 8 + 'px'
});
$('.MRO_Submit').css({
  'bottom': '0px',
  'right': '0px',
  'width': $('.MR_option').outerWidth() * 0.1 + 'px',
  'height': $('.MR_option').outerHeight() * 0.05 + 'px'
});
$('.ML_History').css({
  'max-height': $('.MODIFY_LEFT_FORM').outerHeight() + 'px'
});
$('tbody > tr').hover(function() {
  $(this).css({
    'border': '1px solid rgb(237, 75, 75)'
  });
  $(this).find('td').css({
    'border': 'none'
  });
  $(this).find('td:nth-child(1)').css({
    'border-right': 'solid 1px black'
  });
  $(this).find('td:nth-child(2)').css({
    'border-right': 'solid 1px black',
    'border-left': 'solid 1px black'
  });
  $(this).find('td:nth-child(3)').css({
    'border-left': 'solid 1px black'
  });

}, function() {
  $(this).css({
    'border': 'none'
  });
  $(this).find('td').css({
    'border': '1px solid black'
  });
});






$.ajax({
  url:"getImage.php",
  type : "POST",
  data : {chk:1},
  dataType : "json",
  success : function(result)
  {
    for(var idx =0; idx < result[0].length; idx++)
    {
      var tbody = $('<tbody>').attr('class','col-1').attr('id',idx).appendTo('#history');
      var tr = $('<tr class="col-1">').appendTo(tbody);

      $('<td>').attr('class', 'col-4').text(result[0][idx]).appendTo(tr);//날짜
      $('<td>').attr('class', 'col-2').text(result[1][idx]).appendTo(tr);//파일 이름
      $('<td>').attr('class', 'col-4').text('출력안할래').appendTo(tr);//최근 수정일 없에기
    }
  },error:function(request,status,error){
    alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
  }

});



$(document).on('click','#history tbody',function(){
  var getId = $(this).attr('id');
  var title = $('#'+getId+'>tr>td:nth-child(2)').text();


  $.ajax({
    url:"getSelectedInfo.php",
    type:"POST",
    data:{title:title},
    success : function(result)
    {
      //alert(title);
      window.open('ChangeInfo.php');

    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });

});



$('#search').on('click', function() {
  $('tbody').remove();
  var sub = $("#subject option:selected").val();
  var gra = $("#grade option:selected").val();
  var b_n = $("#book_name option:selected").val();
  var q_t = $("#question_type option:selected").val();
  var chk = 0;
  $.ajax({
    url:"getImage.php",
    type : "POST",
    data : {sub:sub, grade:gra, book_name:b_n, question_type:q_t, chk:chk},
    dataType : "json",
    success : function(result)
    {
      alert(result);
      for(var idx =0; idx < result[0].length; idx++)
      {
        var tbody = $('<tbody>').attr('class','col-1').attr('id',idx).appendTo('#history');
        var tr = $('<tr class="col-1">').appendTo(tbody);

        $('<td>').attr('class', 'col-4').text(result[0][idx]).appendTo(tr);//날짜
        $('<td>').attr('class', 'col-2').text(result[1][idx]).appendTo(tr);//파일 이름
        $('<td>').attr('class', 'col-4').text('출력안할래').appendTo(tr);//최근 수정일 없에기
      }
    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });
  // alert(sub);
  // alert(gra);
  // alert(b_n);
  // alert(q_t);
  // alert('검새쿠');
});
