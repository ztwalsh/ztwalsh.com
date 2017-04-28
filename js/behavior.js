$(document).ready(function() {
  $('#nav-icon').click(function(){
		$(this).toggleClass('on');
    $('section.menu').toggleClass('on');
    $('nav').fadeToggle(100);
    return false;
	});
});
