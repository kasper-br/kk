$(document).ready( function() {
   
	//Front slider
	var bannerslider = $('.slideshow').bxSlider({
		pager: true, //viser linjer
		controls: false, //vi har fjernet play og pause knap
		auto: true, //Den autoplayer ved start
		pause: '5500', //Et slide tager 5,5 sek
		speed: '300', //Skifter til næste med 0,5 sek
		useCSS: false //Vi bruger ikke CSS-transitions
	});

	//List accordion
	$( "#accordion, #megamenu" ).accordion({
		collapsible: true,
		active : 'none',
		heightStyle: 'content'
	});

	$('.selfservice').on('click', function() {
		$('.menuhide').toggleClass('open');
		$(this).toggleClass('selected');
	});

});