$('header').css({
  'height': $(window).outerHeight() * 0.1 + 'px'
});

$('.Panel1').css({
  'height': $(window).outerHeight() * 0.7 + 'px'
});

$('.P1_TT').css({
  'top': -$('.P1_TT').outerHeight() * 1.2 + 'px'
});
$('<div>').css({
  'position': 'absolute',
  'background': 'black',
  'width': '100%',
  'height': $(window).outerHeight() + 'px',
  'top': $('.Panel1background').outerHeight() + $('header').outerHeight() + 'px',
  'z-index':'0'
}).appendTo('html');
$('.P1_OurStory > img').css({
  'width': $('.P1_OurStory > a').outerHeight() * 0.7 + 'px',
  'left': $('.P1_OurStory > a').outerHeight() / 2.5 + 'px'
});
$('.P1_OurStory > a').css({
  'left': $('.P1_OurStory > img').outerWidth() * 2 + 'px'
});
$('.P1_OurStory').css({
  'width': parseInt($('.P1_OurStory > a').css('left')) + $('.P1_OurStory > a').outerWidth() * 0.7 + 'px',
  'height': $('.P1_OurStory > a').outerHeight() + 'px',
  'bottom': -$('.P1_Item1').outerHeight() / 4 + 'px'
});

$('.P1_OurStory').hover(function() {
  $('.P1_OurStory').css({
    'background-color': 'black'
  });
  $('.P1_OurStory > a').css({
    'color': 'white'
  });
  $('.P1_OurStory > img').attr({
    src: 'img/Our_white.png'
  });
}, function() {
  $('.P1_OurStory').css({
    'background-color': 'rgba(0,0,0,0)'
  });
  $('.P1_OurStory > a').css({
    'color': 'black'
  });
  $('.P1_OurStory > img').attr({
    src: 'img/Our.png'
  });

});
