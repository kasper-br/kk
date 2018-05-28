$(document).ready( function() {
   
	//Front slider
	var bannerslider = $('.slideshow').bxSlider({
		slideMargin: 5,
		pager: true,
		controls: false,
		auto: true,
		pause: '5500',
		speed: '300',
		useCSS: false
	});

	//List accordion
	$( "#accordion, #megamenu" ).accordion({
		collapsible: true,
		active : 'none',
		heightStyle: 'content'
	});

	$('.gethelp').on('click', function() {
		alert('123 guide');
	});

	$('.selfservice').on('click', function() {
		$('.menuhide').toggleClass('open');
		$('.selfservice').toggleClass('selected');
	});

});