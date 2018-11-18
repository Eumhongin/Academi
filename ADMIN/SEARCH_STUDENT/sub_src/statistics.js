$(document).ready(function(){

  $.ajax({
    url : "getStatistics.php",  //url 바꾸기
    dataType :"json",
    success : function(result)
    {
      for(var idx =0; idx < result.length; idx++)
      {
        var set = 
      }
    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });



});
