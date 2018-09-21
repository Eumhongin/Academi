var inside;
var outside;
$('.v-line').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.ADD_RIGHT_IMG').css({
  'height': $(window).outerHeight() * 0.8 + 'px'
});
$('.ADD_RIGHT_IMG').css({
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.Preview').css({
  'right': ($(window).outerWidth() * 0.5 - $('.ADD_RIGHT_IMG').outerWidth()) * 0.5 + 'px'
});

$('.ADD_LEFT_FORM').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('.ADD_LEFT_FORM2').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});

//extract file name in file path
$('#selectedFile').on('change', function() {
  $.each($('#selectedFile').prop("files"), function(k, v) {
    var filename = v['name'];
    $('.ALFSFS_FilePath').text(filename);
    // filename = "blahblah.jpg", without path
  });
});
//console.log($('.ALFSFS_FilePath').outerHeight());
$('.picedit').css({
  'height': $('.ALFSFS_FilePath').outerHeight()
});
$('.Subtitle_ADD').css({
  'left': ($(window).outerWidth() * 0.5 - $('.ADD_RIGHT_IMG').outerWidth()) * 0.5 + 'px'
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      // $('.ADD_RIGHT_IMG').css({'background-image':'url('+e.target.result+')'});
      $('#ARI_Priview').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);

  }
}
$('#selectedFile').change(function() {
  readURL(this);
});



$('.ALPanel_Regular').css({
  'width': (($(window).outerWidth() * 0.5 - $('.ADD_LEFT_FORM').outerWidth()) * 0.5) * 0.4 + 'px'
});
console.log($('.ADD_LEFT_FORM').css('margin-left'));
$('.ALPanel_Regular').css({

  'height': $('.ADD_LEFT_FORM').outerHeight() * 0.14 + 'px',
  'left': parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true)+1 + 'px',
  'top': parseInt($('.ADD_LEFT_FORM').css('margin-top')) * 1.5 + 'px'
});


console.log($('.ADD_LEFT_FORM').css('margin-left'));
$('.ALPanel_UnRegular').css({
  'width': (($(window).outerWidth() * 0.5 - $('.ADD_LEFT_FORM').outerWidth()) * 0.5) * 0.4 + 'px',
  'height': $('.ADD_LEFT_FORM').outerHeight() * 0.14 + 'px',
  'left': parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true) + 'px',
  'top': parseInt($('.ADD_LEFT_FORM').css('margin-top')) * 1.5 + $('.ALPanel_Regular').outerHeight() + 'px'
});
inside = parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true)+1;
outside = parseInt($('.ADD_LEFT_FORM').css('margin-left')) - $('.ALPanel_Regular').outerWidth(true);
$('.ALPanel_UnRegular').click(function() {
  $('.ALPanel_UnRegular').css({
    'left': inside + 'px'
  });
  $('.ALPanel_Regular').css({
    'left': outside + 'px'
  });
  $('.ADD_LEFT_FORM').addClass('hide');
  $('.ADD_LEFT_FORM2').removeClass('hide');
});
$('.ALPanel_Regular').click(function() {
  $('.ALPanel_Regular').css({
    'left': inside + 'px'
  });
  $('.ALPanel_UnRegular').css({
    'left': outside + 'px'
  });
  $('.ADD_LEFT_FORM2').addClass('hide');
  $('.ADD_LEFT_FORM').removeClass('hide');
});
