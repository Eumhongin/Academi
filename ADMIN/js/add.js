console.log($(window).outerHeight());
$('.v-line').css({'height':$(window).outerHeight()*0.9+'px','top':$(window).outerHeight()*0.05+'px'});
$('.ADD_RIGHT_IMG').css({'height':$(window).outerHeight()*0.8+'px','background-image':'url("../img/BG.jpg")'});
$('.ADD_RIGHT_IMG').css({'margin-top':$(window).outerHeight()*0.1+'px'});
$('.Preview').css({'right':($(window).outerWidth()*0.5-$('.ADD_RIGHT_IMG').outerWidth())*0.5+'px'})
