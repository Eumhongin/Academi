
$(document).ready(function(){

  $.ajax({
    url : "sub_src/get_marking.php",  //url 바꾸기
    dataType :"json",
    success : function(result)
    {

      for (i = 0; i < 8; i++) {
        var tbody = $('<tbody>').attr('id',result[0][i]).appendTo('.history');
        $('<td>').text(result[5][i]).appendTo(tbody);
        $('<td>').text(result[1][i]).appendTo(tbody);
        $('<td>').text(result[4][i]).appendTo(tbody);
      }

    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });



});
