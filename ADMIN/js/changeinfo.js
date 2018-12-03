$('.wrapper').css({
  'grid':$(window).outerHeight()+'px / 50% 50%'
});
$('#selectedFile').on('change', function() {
  $.each($('#selectedFile').prop("files"), function(k, v) {
    var filename = v['name'];
    $('.FilePath').text(filename);
    // filename = "blahblah.jpg", without path
  });
});
