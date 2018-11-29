$('.ALFS_Difficult').css({
  'margin-top':$('.ADD_LEFT_FORM').outerHeight()*0.47+'px'
});
$('.sub > input').change(function(){
  if(this.checked){
    $('#lineB'+$(this).val()).addClass('Activate');
    $('#lineB'+$(this).val()).removeAttr('disabled');
    $('#lineT'+$(this).val()).addClass('Activate');
    $('#lineT'+$(this).val()).removeAttr('disabled');
    $('#lineB'+$(this).val()).css({
      'opacity':'1'
    });
    $('#lineT'+$(this).val()).css({
      'opacity':'1'
    });
  }
  else {
    $('#lineB'+$(this).val()).attr({"disabled":"disabled"});
    $('#lineB'+$(this).val()).removeClass('Activate');
    $('#lineT'+$(this).val()).attr({"disabled":"disabled"});
    $('#lineT'+$(this).val()).removeClass('Activate');
    $('#lineB'+$(this).val()).css({
      'opacity':'0.3'
    });
    $('#lineT'+$(this).val()).css({
      'opacity':'0.3'
    });
  }

});
