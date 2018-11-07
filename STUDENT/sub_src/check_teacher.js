// set left, right position
console.log($(window).outerHeight());
$('.left').css({
  'width':$(window).outerWidth()*0.5+'px',

});
$('.right').css({
  'width':$(window).outerWidth()*0.5+'px',
  'left' : $(window).outerWidth()*0.5+'px'

});
