$(document).ready(function() {
  $('#nav-icon').click(function(){
		$(this).toggleClass('on');
    $('section.menu').toggleClass('on');
    $('nav').toggleClass('open');
    return false;
	});
});