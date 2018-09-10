
$('.v-line').css({'height':$(window).outerHeight()*0.9+'px','top':$(window).outerHeight()*0.05+'px'});
$('.ADD_RIGHT_IMG').css({'height':$(window).outerHeight()*0.8+'px','background-image':'url("../img/Preview.png")'});
$('.ADD_RIGHT_IMG').css({'margin-top':$(window).outerHeight()*0.1+'px'});
$('.Preview').css({'right':($(window).outerWidth()*0.5-$('.ADD_RIGHT_IMG').outerWidth())*0.5+'px'})

$('.ADD_LEFT_FORM').css({'height':$(window).outerHeight()*0.8+'px','margin-top':$(window).outerHeight()*0.1+'px'});

//extract file name in file path
$('#selectedFile').on('change',function (){
  $.each($('#selectedFile').prop("files"), function(k,v){
    var filename = v['name'];
    $('.ALFSFS_FilePath').text(filename);
    // filename = "blahblah.jpg", without path
  });
});
console.log($('.ALFSFS_FilePath').outerHeight());
$('.picedit').css({'height':$('.ALFSFS_FilePath').outerHeight()});
$('.Subtitle_ADD').css({'left':($(window).outerWidth()*0.5-$('.ADD_RIGHT_IMG').outerWidth())*0.5+'px'});
function readURL(input){
  if(input.files && input.files[0]){
    var reader = new FileReader();
     reader.onload = function(e){
       // $('.ADD_RIGHT_IMG').css({'background-image':'url('+e.target.result+')'});
       $('#ARI_Priview').attr('src',e.target.result);
     }
     reader.readAsDataURL(input.files[0]);

  }
}
$('#selectedFile').change(function(){
  readURL(this);
});
