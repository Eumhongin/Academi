$("#delete_button").on('click',function(){
  //버튼 id값 바꾸기
  var name = $("#delete_type option:selected").text();
  var type = $("#delete_type option:selected").val();
  var drop_value = $('#ALFSO_Subject_id_type option:selected').val();

  if(confirm(type+'를(을) 삭제하시겠습니까?'+name))
  {
    var check = 0;
    //delete_type id값 바꾸기
    $.ajax({
      url : "test1.php",  //url 바꾸기
      type : "POST",
      data : {type:type, check:check, subject:drop_value},
      // dataType :"json",
      success : function(result)
      {
        $("#delete_type").val('999');
        alert(' 삭제완료');
      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });
  }else{

  }
});


$("#book_delete_button").on('click',function(){
  //버튼 id값 바꾸기
  var name = $("#book_delete_type option:selected").text();
  var type = $("#book_delete_type option:selected").val();
  var drop_value = $('#ALFSO_Subject_id_book option:selected').val();
  console.log(name);
  console.log(type);
  console.log(drop_value);
  if(confirm(type+'를(을) 삭제하시겠습니까?'+name))
  {
    var check = 3;
    //delete_type id값 바꾸기
    $.ajax({
      url : "test1.php",  //url 바꾸기
      type : "POST",
      data : {type:type, check:check, subject:drop_value},
      // dataType :"json",
      success : function(result)
      {
        $("#book_delete_type").val('999');
        alert(result);
      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });
  }
});





$("#insert_button").on('click',function(){
  //버튼 id값 바꾸기
  var type = $("#insert_type").val();
  var drop_value = $('#ALFSO_Subject_id_type option:selected').val();

  if(confirm(type+'를(을) 추가하시겠습니까?'))
  {
    var check = 1;
    //insert_type id값 바꾸기
    $.ajax({
      url : "test1.php",  //url 바꾸기
      type : "POST",
      data : {type:type, check:check, subject:drop_value},
      // dataType :"json",
      success : function(result)
      {
        $("#insert_type").val('');
        alert(result+' 추가완료');
      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });

  }
});


$("#book_insert_button").on('click',function(){
  //버튼 id값 바꾸기
  var type = $("#book_insert_type").val();
  var drop_value = $('#ALFSO_Subject_id_book option:selected').val();
console.log(drop_value);
  if(confirm(type+'를(을) 추가하시겠습니까?'))
  {
    var check = 4;
    //insert_type id값 바꾸기
    $.ajax({
      url : "test1.php",  //url 바꾸기
      type : "POST",
      data : {type:type, check:check, subject:drop_value},
      // dataType :"json",
      success : function(result)
      {
        $("#book_insert_type").val('');
        alert(result+' 추가완료');
      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });
  }
});







$("#update_button").on('click',function(){
  //버튼 id값 바꾸기
  var name = $("#update_type option:selected").text();
  var type = $("#update_type option:selected").val();
  var change = $("#change_type").val();
  var drop_value = $('#ALFSO_Subject_id_type option:selected').val();

  if(confirm(name+'를(을) '+change+' 로 변경하시겠습니까?'))
  {
    var check = 2;
    // update_type id값 바꾸기
    $.ajax({
      url : "test1.php",  //url 바꾸기
      type : "POST",
      data : {type:type, change:change, check:check, name:name, subject:drop_value},
      // dataType :"json",
      success : function(result)
      {
        $("#update_type").val('0');
        $("#change_type").val('');
        alert(' 변경 완료');
      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });
  }
});


$("#book_update_button").on('click',function(){
  //버튼 id값 바꾸기
  var name = $("#book_update_type option:selected").text();
  var type = $("#book_update_type option:selected").val();
  var change = $("#book_change_type").val();
  var drop_value = $('#ALFSO_Subject_id_book option:selected').val();

  if(confirm(name+'를(을) '+change+' 로 변경하시겠습니까?'))
  {
    var check = 5;
    // update_type id값 바꾸기
    $.ajax({
      url : "test1.php",  //url 바꾸기
      type : "POST",
      data : {type:type, change:change, check:check, subject:drop_value},
      // dataType :"json",
      success : function(result)
      {
        $("#book_update_type").val('0');
        $("#book_change_type").val('');
        alert(' 변경 완료');
      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });
  }
});


$('#ALFSO_Subject_id_type').change(function(){

  var drop_value = $('#ALFSO_Subject_id_type option:selected').val();
  console.log(drop_value);

  $("#update_type").empty();
  $("#delete_type").empty();

  $.ajax({
    url : "../PRINT/subject_change.php",  //url 바꾸기.
    type:"POST",
    data:{drop_value:drop_value},
    dataType :"json",
    success : function(result)
    {
      $("#update_type").append($("<option selected></option>").attr("value",'').text("=== 유형 ==="));
      $("#delete_type").append($("<option selected></option>").attr("value",'').text("=== 유형 ==="));
      for(var idx = 0; idx < result[2].length; idx++)
      {//타입 이름, 타입 번호
        $("#update_type").append($("<option></option>").attr("value",result[3][idx]).text(result[2][idx]));
        $("#delete_type").append($("<option></option>").attr("value",result[3][idx]).text(result[2][idx]));
      }

    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });

});


$('#ALFSO_Subject_id_book').change(function(){

  var drop_value = $('#ALFSO_Subject_id_book option:selected').val();
  console.log(drop_value);

  $("#book_delete_type").empty();
  $("#book_update_type").empty();

  $.ajax({
    url : "../PRINT/subject_change.php",  //url 바꾸기.
    type:"POST",
    data:{drop_value:drop_value},
    dataType :"json",
    success : function(result)
    {
      $("#book_delete_type").append($("<option selected></option>").attr("value",'').text("=== 책이름 ==="));
      $("#book_update_type").append($("<option selected></option>").attr("value",'').text("=== 책이름 ==="));

      for(var idx = 0; idx < result[0].length; idx++)
      {//책이름, 책번호
        $("#book_delete_type").append($("<option></option>").attr("value",result[1][idx]).text(result[0][idx]));
        $("#book_update_type").append($("<option></option>").attr("value",result[1][idx]).text(result[0][idx]));
      }


    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });

});
