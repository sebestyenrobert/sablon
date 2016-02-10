$(document).ready(function() {

	// Bx slider for page
	$('.bxslider').bxSlider({
	     pager: false,
	     controls: true,
	});

	// Slick
	$('.slick').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 3,
		slidesToScroll: 1
	});

	// Custom select
	$('select').fancySelect();

	// Mobile menu activator
    $('.menu-activator .lines-button').on('click', function() {
        $('.header').toggleClass('menu-on');
        $(this).toggleClass('close');
    });

});