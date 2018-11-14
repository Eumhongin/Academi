$('.v-line').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.v-line2').css({
  'height': $(window).outerHeight() * 0.9 + 'px',
  'top': $(window).outerHeight() * 0.05 + 'px'
});
$('.Subtitle_search').css({
  'left': ($(window).outerWidth() * 0.5 - $('.sl_form').outerWidth()) / 2 + 'px'
});
$('.sl_form').css({
  'height': $(window).outerHeight() * 0.8 + 'px',
  'margin-top': $(window).outerHeight() * 0.1 + 'px'
});
$('td > input').css({
  'height': $('td').outerHeight() + 'px'
});
$('.changebtn').on('click', function() {
  if ($(this).text() == '오답 통계보기') {
    $(this).text('학생 스케쥴 보기');
    $('#calendar').removeClass('Active');
    $('#calendar').addClass('hide');
    $('#student_statics').removeClass('hide');
    $('#student_statics').addClass('Active');
    makestatic(8);
  } else {
    $(this).text('오답 통계보기');
    $('#student_staticsstudent_statics').removeClass('Active');
    $('#student_statics').addClass('hide');
    $('#calendar').removeClass('hide');
    $('#calendar').addClass('Active');
  }
});

//kindlength 는 불러오는 유형의 갯수
function makestatic(kindlength) {
  let i = 0;
  let wrapper = $('<div>').addClass('subject_name').appendTo('#student_statics');
  let subjectname = '과목이름';
  let h1 = $('<h1>').text(subjectname).appendTo(wrapper);
  let table = $('<table>').appendTo(wrapper);
  let thead = $('<thead>').appendTo(table);

  for (i = 0; i < kindlength; i++) {
    $('<td>').text('유형의 이름').appendTo(thead);
  }
  let tbody = $('<tbody>').appendTo(table);
  for (i = 0; i < kindlength; i++) {
    $('<td>').text('통계값').appendTo(tbody);
  }

}
