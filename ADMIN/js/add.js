var inside;
var outside;
var checked_array = new Array();
var word = new Array();
var answer = new Array();
var get = getParameters('get');
console.log(get);
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

function check(a){
  // 눌렀다면? 큐에서 지움
  if(checked_array.indexOf(a) != -1){
    checked_array.splice(checked_array.indexOf(a),1);
    console.log(checked_array);
  }
  else{ //아니라면? 큐에 추가함
    checked_array.push(a);
    console.log(checked_array);

  }
}


$('.v-line').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.ADD_RIGHT_IMG').css({
  'height': $(window).outerHeight() * 0.8 + 'px'
});
$('.ADD_RIGHT_IMG').css({
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.Preview').css({
  'right': ($(window).outerWidth() * 0.5 - $('.ADD_RIGHT_IMG').outerWidth()) * 0.5 + 'px'
});

$('.ADD_LEFT_FORM').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.ADD_LEFT_FORM2').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});

//extract file name in file path
$('#selectedFile').on('change', function() {
  $.each($('#selectedFile').prop("files"), function(k, v) {
    var filename = v['name'];
    $('.ALFSFS_FilePath').text(filename);
    // filename = "blahblah.jpg", without path
  });
});

// 중섭추가12-15 ★★★★★★★★★★★★★★★★★★★★★★★
$('#selectedFile2').on('change', function() {
  $.each($('#selectedFile2').prop("files"), function(k, v) {
    var filename = v['name'];
    $('.ALFSFS_FilePath2').text(filename);
    // filename = "blahblah.jpg", without path
  });
});

$('#selectedFile3').on('change', function() {
  $.each($('#selectedFile3').prop("files"), function(k, v) {
    // alert(filename)
    var filename = v['name'];
    $('.ALFSFS_FilePath3').text(filename);
    // filename = "blahblah.jpg", without path
  });
});

$('#selectedFile4').on('change', function() {
  $.each($('#selectedFile4').prop("files"), function(k, v) {
    var filename = v['name'];
    $('.ALFSFS_FilePath4').text(filename);
    // filename = "blahblah.jpg", without path
  });
});

//console.log($('.ALFSFS_FilePath').outerHeight());
$('.picedit').css({
  'height': $('.ALFSFS_FilePath').outerHeight()
});

// 중섭추가12-15 ★★★★★★★★★★★★★★★★★★★★★★★
$('.picedit2').css({
  'height': $('.ALFSFS_FilePath2').outerHeight()
});

$('.picedit3').css({
  'height': $('.ALFSFS_FilePath2').outerHeight()
});

$('.picedit4').css({
  'height': $('.ALFSFS_FilePath2').outerHeight()
});

$('.Subtitle_ADD').css({
  'left': ($(window).outerWidth() * 0.5 - $('.ADD_RIGHT_IMG').outerWidth()) * 0.5 + 'px'
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      // $('.ADD_RIGHT_IMG').css({'background-image':'url('+e.target.result+')'});
      $('#ARI_Priview').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);

  }
}
// 중섭추가12-15 ★★★★★★★★★★★★★★★★★★★★★★★
function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      // $('.ADD_RIGHT_IMG').css({'background-image':'url('+e.target.result+')'});
      $('#ARI_Priview2').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);

  }
}

$('#selectedFile').change(function() {
  readURL(this);
});

// 중섭추가12-15 ★★★★★★★★★★★★★★★★★★★★★★★
$('#selectedFile2').change(function() {
  readURL2(this);
});



$('.ALPanel_Regular').css({
  'width': (($(window).outerWidth() * 0.5 - $('.ADD_LEFT_FORM').outerWidth()) * 0.5) * 0.4 + 'px'
});
console.log($('.ADD_LEFT_FORM').css('margin-left'));
$('.ALPanel_Regular').css({

  'height': $('.ADD_LEFT_FORM').outerHeight() * 0.14 + 'px',
  'left': parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true)+1 + 'px',
  'top': parseInt($('.ADD_LEFT_FORM').css('margin-top')) * 1.5 + 'px'
});


console.log($('.ADD_LEFT_FORM').css('margin-left'));
$('.ALPanel_UnRegular').css({
  'width': (($(window).outerWidth() * 0.5 - $('.ADD_LEFT_FORM').outerWidth()) * 0.5) * 0.4 + 'px',
  'height': $('.ADD_LEFT_FORM').outerHeight() * 0.14 + 'px',
  'left': parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true) + 'px',
  'top': parseInt($('.ADD_LEFT_FORM').css('margin-top')) * 1.5 + $('.ALPanel_Regular').outerHeight() + 'px'
});
inside = parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true)+1;
outside = parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true);
$('.ALPanel_UnRegular').click(function() {
  $('.ALPanel_UnRegular').css({
    'left': inside + 'px'
  });
  $('.ALPanel_Regular').css({
    'left': outside + 'px'
  });
  $('.ADD_LEFT_FORM').addClass('hide');
  $('.ADD_LEFT_FORM2').removeClass('hide');
});
$('.ALPanel_Regular').click(function() {
  $('.ALPanel_Regular').css({
    'left': inside + 'px'
  });
  $('.ALPanel_UnRegular').css({
    'left': outside + 'px'
  });
  $('.ADD_LEFT_FORM2').addClass('hide');
  $('.ADD_LEFT_FORM').removeClass('hide');
});




$('.ALFS_Submit').click(function(){
    if(confirm('추가하시면 삭제는 불가능 합니다.\n제대로 입력하셨습니까?'))
    {
      $.ajax({
        url : "../ADDING/transfer.php",  //url 바꾸기.
        type:"POST",
        data:{num:checked_array},
        success : function(result)
        {
          $('.hello').trigger('click');
        },error:function(request,status,error){
          alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }

      });
    }else {}
})



$('#subject').change(function(){
  var drop_value = $('.ALFSO_Subject option:selected').val();
  console.log(drop_value);

  $(".ALFSO_Bookname").empty();
  $(".ALFSO_type").empty();

  $.ajax({
    url : "subject_change.php",  //url 바꾸기.
    type:"POST",
    data:{drop_value:drop_value},
    dataType :"json",
    success : function(result)
    {
      $(".ALFSO_type").append($("<option selected></option>").attr("value",'').text("유형"));
      $(".ALFSO_Bookname").append($("<option selected></option>").attr("value",'').text("책이름"));
      for(var idx = 0; idx < result[0].length; idx++)
      {//책이름, 책번호
        $(".ALFSO_Bookname").append($("<option></option>").attr("value",result[1][idx]).text(result[0][idx]));
      }

      for(var idx = 0; idx < result[2].length; idx++)
      {//타입 이름, 타입 번호
        $(".ALFSO_type").append($("<option></option>").attr("value",result[3][idx]).text(result[2][idx]));
      }

    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });

});


$('.word_submit').click(function(){
  for(var idx = 0; idx < 30; idx++)
  {
    var chkword=$(".word"+idx).val();
    var chkanswer=$(".answer"+idx).val();
    if(chkword != '')
    {
      word[idx] = chkword;
      answer[idx] = chkanswer;
    }
  }

  $.ajax({
    url : "add_word.php",  //url 바꾸기.
    type:"POST",
    data:{word:word, answer:answer},
    // dataType :"json",
    success : function()
    {
      alert('추가완료');
      location.href ='add.php';
    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });

})



$('.picedit0').click(function(){

  location.href ='stage_direction_image_add.php?get=1';

})

$(document).on('click','td',function(){
  if($(this).css('background-color') == 'rgb(255, 36, 36)'){
    // 2번재 누를때
    $(this).css({
      'background-color':'rgb(255, 255, 255)'
    });

  }
  else{
    // 처음 누룰때
    $(this).css({
      'background-color':'rgb(255, 36, 36)'
    });
  }


});


if(get == 1)
{
  $.ajax({
      url:"../MODIFY/getImage.php",
      type : "POST",
      data : {chk:2},
      dataType : "json",
      success : function(result)
      {
        console.log(result);
          for(var idx =0; idx < result[0].length; idx++)
          {
              var tbody = $('<tbody>').attr('class','col-1').attr('id',idx).appendTo('#history');
              var tr = $('<tr  onclick=check('+result[2][idx]+') class="col-1">').appendTo(tbody);

              $('<td>').attr('class', 'col-2').text(result[0][idx]).appendTo(tr);//날짜
              $('<td>').attr('class', 'col-2').text(result[1][idx]).appendTo(tr);//파일 이름
          }

      },error:function(request,status,error){
              alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

          });
}
