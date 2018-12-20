$('.ALFS_Difficult').css({
  'margin-top':$('.ADD_LEFT_FORM').outerHeight()*0.1+'px'
});
$('.sub > input').change(function(){
  if(this.checked){
    $('#lineB'+$(this).val()).addClass('Activate');
    $('#lineB'+$(this).val()).removeAttr('disabled');
    $('#lineT'+$(this).val()).addClass('Activate');
    $('#lineT'+$(this).val()).removeAttr('disabled');
    $('#lineB'+$(this).val()).css({
      'opacity':'1'
    });
    $('#lineT'+$(this).val()).css({
      'opacity':'1'
    });
  }
  else {
    $('#lineB'+$(this).val()).attr({"disabled":"disabled"});
    $('#lineB'+$(this).val()).removeClass('Activate');
    $('#lineT'+$(this).val()).attr({"disabled":"disabled"});
    $('#lineT'+$(this).val()).removeClass('Activate');
    $('#lineB'+$(this).val()).css({
      'opacity':'0.3'
    });
    $('#lineT'+$(this).val()).css({
      'opacity':'0.3'
    });
  }

});
$('#ALFSO_Subject_id').change(function(){
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


});
