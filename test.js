var arry = new Array(10);
arry = [1,2,3,4,5,6,7,8,9,0];


$('#1').on('click', function(){

  // alert(arry[2]);
  $.ajax({
    url : "test1.php",  //url 바꾸기.
    success : function(result)
    {

      alert(result);

    },error:function(request,status,error){
      alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    }

  });
});
