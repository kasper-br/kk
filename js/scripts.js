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
	$( "#accordion" ).accordion({
		collapsible: true,
		active : 'none'
	});

});