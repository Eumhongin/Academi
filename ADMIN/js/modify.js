$('.v-line').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.MR_option').css({
  'height': $(window).outerHeight() * 0.8 + 'px'
});
$('.MR_option').css({
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.Detail').css({
  'right': ($(window).outerWidth() * 0.5 - $('.MR_option').outerWidth()) * 0.5 + 'px'
});
$('.MODIFY_LEFT_FORM').css({
  'height': $(window).outerHeight() * 0.7 + 'px',
  'margin-top': $(window).outerHeight() * 0.2 + 'px'
});
$('.Subtitle_MODIFY').css({
  'left': ($(window).outerWidth() * 0.5 - $('.MODIFY_LEFT_FORM').outerWidth()) / 2 + 'px'
});
$('.ADD_LEFT_FORM').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.MLL_History').css({
  'position': 'absolute',
  'top': $(window).outerHeight() * 0.1 + 'px',
  'font-size': '2vw',
  'left': ($(window).outerWidth() * 0.5 - $('.MODIFY_LEFT_FORM').outerWidth()) / 2 + 'px',
  'font-family': 'BS2'
});
$('.MR_option > *').css({
  'margin-left': ($('.MR_option').outerWidth() - $('.MRO_Subject').outerWidth() * 4) / 8 + 'px'
});
$('.MRO_Submit').css({
  'bottom': '0px',
  'right': '0px',
  'width': $('.MR_option').outerWidth() * 0.1 + 'px',
  'height': $('.MR_option').outerHeight() * 0.05 + 'px'
});
$('.ML_History').css({
  'max-height': $('.MODIFY_LEFT_FORM').outerHeight() + 'px'
});
$('tbody > tr').hover(function() {
  $(this).css({
    'border': '1px solid rgb(237, 75, 75)'
  });
  $(this).find('td').css({
    'border': 'none'
  });
  $(this).find('td:nth-child(1)').css({
    'border-right': 'solid 1px black'
  });
  $(this).find('td:nth-child(2)').css({
    'border-right': 'solid 1px black',
    'border-left': 'solid 1px black'
  });
  $(this).find('td:nth-child(3)').css({
    'border-left': 'solid 1px black'
  });

}, function() {
  $(this).css({
    'border': 'none'
  });
  $(this).find('td').css({
    'border': '1px solid black'
  });
});
