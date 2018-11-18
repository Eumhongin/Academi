function getgetget(num)
{
  $("#"+num+"").on('click',function(){
    //버튼 id값 바꾸기
    alert(num);
    $.ajax({
      url : "test_get_marking.php",  //url 바꾸기
      dataType :"json",
      success : function(result)
      {

        // for(var idx = 0; idx < result[4].length; idx++)
        // {
        //
        //   while(result[4][idxx] != null)
        //   {
        //     var first = $('<div>').text(result[4][idx]).appendTo('.set');
        //   }
        //
        // }
        $('.set').empty();
        var idx = 1;
        while(result[4][num][idx] != null)
        {
          var first = $('<div>').text(result[4][num][idx++]).appendTo('.set');
        }

      },error:function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }

    });
  });
}



$(document).ready(function(){

  $.ajax({
    url : "test_get_marking.php",  //url 바꾸기
    dataType :"json",
    success : function(result)
    {

      // alert(result[1][0]);
      for(var idx = 0; idx < result[0].length; idx++)
      {
        var first = $('<div>').attr('id',idx).text(result[1][idx]).appendTo('.all');
        getgetget(idx);
      }
    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });



});


$("#1").on('click',function(){
  //버튼 id값 바꾸기
  alert('12');
});
